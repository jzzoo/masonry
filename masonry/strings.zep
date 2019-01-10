namespace Masonry;

class Strings
{
    /**
     * Converts the input parameter to a hump name.
     *
     * @param  string  str
     * @return string
     */
    public function camel_case(var str = null) {
        if empty( str ) || is_string( str ) === false {
            throw new \Exception("The input parameter is not valid -(camel_case).");
        }
        // var step1_re = ucwords(str_replace(["-", "_"], " ", str));
        // var step2_re = str_replace(" ", "", step1_re );
        // var step3_re = lcfirst( step2_re );
        return lcfirst( str_replace(" ", "", ucwords( str_replace(["-", "_"], " ", str) ) ) );
    }

    /**
     * Determines whether a given string ends with a given value.
     *
     * @param  string  str
     * @param  string  aim
     * @return bool
     */
    public function end_with(var str = null, var aim = null) {
        if empty( str )
           || is_string( str ) === false
           || empty( aim )
           || is_string( aim ) === false
        {
            throw new \Exception("The input parameter is not valid -(end_with).");
        }
        var aim_len = strlen( aim );
        var new_aim = substr( str, -aim_len );
        if aim == new_aim {
            return true;
        }
        return false;
    }

    /**
     * Determines whether the beginning of a given string is a specified value.
     *
     * @param  string  str
     * @param  string  aim
     * @return bool
     */
    public function start_with(var str = null, var aim = null) {
        if empty( str )
           || is_string( str ) === false
           || empty( aim )
           || is_string( aim ) === false
        {
            throw new \Exception("The input parameter is not valid -(start_with).");
        }
        var aim_len = strlen( aim );
        var new_aim = substr( str, 0, aim_len );
        if aim == new_aim {
            return true;
        }
        return false;
    }

    /**
     * Returns everything after the specified value in the string.
     *
     * @param  string  str
     * @param  string  aim
     * @return string
     */
    public function str_after(var str = null, var aim = null) {
        if empty( str )
           || is_string( str ) === false
           || empty( aim )
           || is_string( aim ) === false
        {
            throw new \Exception("The input parameter is not valid -(str_after).");
        }
        var aim_len = strlen( aim );
        var str_len = strlen( str );
        if str_len < aim_len {
            throw new \Exception("The input parameter is not valid -(str_after).");
        }
        return substr(str, aim_len);
    }

    /**
     * Returns everything before the specified value in the string.
     *
     * @param  string  str
     * @param  string  aim
     * @return string
     */
    public function str_before(var str = null, var aim = null) {
        if empty( str )
           || is_string( str ) === false
           || empty( aim )
           || is_string( aim ) === false
        {
            throw new \Exception("The input parameter is not valid -(str_before).");
        }
        var aim_pos = strpos( str, aim );
        var str_len = strlen( str );
        if str_len < aim_pos {
            throw new \Exception("The input parameter is not valid -(str_before).");
        }
        return substr(str,0,aim_pos);
    }

    /**
     * Determines whether a given string contains a given value.
     *
     * @param  string  str
     * @param  string  aim
     * @return bool
     */
    public function str_contains(var str = null, var aim = null) {
        if empty( str )
           || is_string( str ) === false
           || empty( aim )
        {
            throw new \Exception("The input parameter is not valid -(str_contains).");
        }
        if is_string( aim ) {
            var aim_pos = strpos( str, aim );
            return (aim_pos !== false ? true : false);
        }
        if is_array( aim ) {
            var value;
            for value in aim {
                var aim_pos = strpos( str, (string)value );
                if aim_pos !== false {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Returns a given string ending in a given value.
     *
     * @param  string  str
     * @param  string  aim
     * @return string
     */
    public function str_finish(var str = null, var aim = null) {
        if empty( str )
           || is_string( str ) === false
           || empty( aim )
           || is_string( aim ) === false
        {
            throw new \Exception("The input parameter is not valid -(str_finish).");
        }
        var _end = str[ ( strlen(str) - 1 ) ];
        if _end == aim {
            return str;
        }
        return str . aim;
    }

    /**
     * Truncates a given string at a given length.
     *
     * @param  string  str
     * @param  string  aim
     * @param  string  _fill
     * @return string
     */
    public function str_limit(var str = null, var aim = null, var _fill = null ) {
        if empty( str )
           || is_string( str ) === false
           || empty( aim )
        {
            throw new \Exception("The input parameter is not valid -(str_limit).");
        }
        int aim_pos = (int)aim;
        if aim_pos <= 0 {
            throw new \Exception("The input parameter is not valid -(str_limit) aim <= 0.");
        }
        if mb_strwidth(str, "UTF-8") <= aim_pos {
            return str;
        }
        return rtrim(mb_strimwidth(str, 0, aim_pos, "", "UTF-8")) . _fill;
    }

    /**
     * Generates a random string of specified length.
     *
     * @param  int  str_len
     * @return string
     */
    public function str_random(int str_len = 6 ) {
        var _bytesd = random_bytes(255);
        if str_len > 255 || str_len < 1 {
            throw new \Exception("The input parameter is not valid -(str_random) str_len > 255 or str_len < 1.");
        }
        return substr(base64_encode(_bytesd),0,str_len);
    }

    /**
     * Returns the name of the class in which the given class deletes the namespace.
     *
     * @param  int  str_len
     * @return string
     */
    public function class_basename(var full_class_name = null ) {
        if empty full_class_name {
            throw new \Exception("The input parameter is not valid -(class_basename).");
        }
        var arr = explode("\\",full_class_name);
        return end( arr );
    }
}
