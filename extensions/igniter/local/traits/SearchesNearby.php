<?php namespace Igniter\Local\Traits;

use ApplicationException;
use Exception;
use Geocoder;
use Illuminate\Support\Facades\Log;
use Location;
use Redirect;
use Request;

trait SearchesNearby
{
    public function onSearchNearby()
    {
        try {
            if (!strlen($searchQuery = post('search_query')))
                throw new ApplicationException(lang('igniter.local::default.alert_no_search_query'));

            $userLocation = $this->geocodeSearchQuery($searchQuery);

            $nearByLocation = Location::searchByCoordinates(
                $userLocation->getCoordinates()
            )->first(function ($location) use ($userLocation) {
                if ($area = $location->searchDeliveryArea($userLocation->getCoordinates())) {
                    Location::updateNearbyArea($area);

                    return $area;
                }
            });

            if(in_array($searchQuery, [1053, 1054, 1071, 1075, 1016, 1017, 1052, 1056, 1057, 1058, 1072, 1011, 1012, 1013, 1015, 1051, 1055, 1061, 1062, 1073, 1074, 1076, 1077, 1078, 1079, 1091 , 1065, 1081, 1082])){
                $postCodeFound = true;
            }else{
                $postCodeFound = false;
            }

            if (!$nearByLocation && ($postCodeFound== false)) {
                throw new ApplicationException(lang('igniter.local::default.alert_no_found_restaurant'));
            }

            if ($redirectPage = post('redirect'))
                return Redirect::to($this->controller->pageUrl($redirectPage));

            return Redirect::to(restaurant_url($this->property('menusPage')));
        }
        catch (Exception $ex) {
            if (Request::ajax()) throw $ex;
            else flash()->danger($ex->getMessage());
        }
    }

    /**
     * @param $searchQuery
     * @return \Igniter\Flame\Geolite\Model\Location
     * @throws \ApplicationException
     */
    protected function geocodeSearchQuery($searchQuery)
    {
        $collection = Geocoder::geocode($searchQuery);

        if (!$collection OR $collection->isEmpty()) {
            Log::error(implode(PHP_EOL, Geocoder::getLogs()));
            throw new ApplicationException(lang('igniter.local::default.alert_invalid_search_query'));
        }

        $userLocation = $collection->first();
        if (!$userLocation->hasCoordinates())
            throw new ApplicationException(lang('igniter.local::default.alert_invalid_search_query'));

        Location::updateUserPosition($userLocation);

        return $userLocation;
    }
}
