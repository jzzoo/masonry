namespace Masonry;

class Arrays
{
    /**
     * If the given key is not in the array, the array_add function adds the given key/value pair to the array.
     *
     * @param  array  arr
     * @param  string  key
     @ @param  string  val
     * @return array
     */
    public function array_add(var arr, var key, var val) {
        if array_key_exists( key, arr ) {
            return arr;
        } else {
            let arr[key] = val;
            return arr;
        }
    }

    /**
     * To combine singular Numbers into an array.
     *
     * @param  array  arr
     * @return array
     */
    public function array_collapse(var arr) {
        var arr_value,value,new_arr = [];
        for arr_value in arr {
            for value in arr_value {
                let new_arr[] = value;
            }
        }
        return new_arr;
    }

    /**
     * Returns two arrays, one containing the keys of the original array and the other containing the values of the original array.
     *
     * @param  array  arr
     * @return array
     */
    public function array_divide(var arr) {
        if is_array(arr) == false || empty(arr) {
            return [];
        }
        // var ks = [];
        // var vs = [];
        var ks = array_keys( arr );
        var vs = array_values( arr );
        var new_arr = [];
        let new_arr[] = ks;
        let new_arr[] = vs;
        return new_arr;
    }

    /**
     * Pushes an item to the beginning of an array.
     *
     * @param  array  arr
     * @param  string  key
     * @param  string  val
     * @return array
     */
    public function array_prepend(var arr, var val, var key = null) {
        var value, new_arr = [];
        if is_null( key ) {
            let new_arr[] = val;
        } else {
            let new_arr[ key ] = val;
        }
        for key,value in arr {
            if empty( key ) {
                let new_arr[] = value;
            } else {
                let new_arr[key] = value;
            }
        }
        return new_arr;
    }

    /**
     * Get a random value from an array.
     *
     * @param  array  $array
     * @param  int|null  $num
     * @return mixed
     */
    public static function array_random( var arr , var number = 1 ) {
        if empty(arr) || is_array(arr) === false || is_int(number) === false {
            throw new \Exception("The input parameter is not valid -(array_random).");
        }
        var _count = count( arr );
        if ( number > _count ) {
            throw new \Exception("The input parameter is not valid -(array_random).");
        }
        if number === 1 {
            return arr[ array_rand( arr ) ];
        }
        if number === 0 {
            return [];
        }
        var keys = array_rand( arr , number );
        var key, value, results = [];
        for value in keys {
            let results[] = arr[value];
        }
        return results;
    }
}
