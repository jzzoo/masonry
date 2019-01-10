namespace Masonry;

class Tools
{
    /**
     * Returns the number of elements in an array/object.
     *
     * @param  array|object  data
     * @return int
     */
    public function count(var data) {
        if is_object(data) || is_array(data) {
            return count(data);
        } else {
            return 0;
        }
    }

    /**
     * Get environment variables.
     *
     * @param  string key
     * @param  string _default
     * @return mixed
     */
    public function env(var key, var _default = null) {
        var value = getenv(key);
        if value === false {
            return _default;
        }
        switch (strtolower(value)) {
            case "true":
            case "(true)":
                return true;
            case "false":
            case "(false)":
                return false;
            case "empty":
            case "(empty)":
                return "";
            case "null":
            case "(null)":
                return null;
        }

        var valueLength = strlen(value);
        if valueLength > 1 && value[0] == '"' && value[valueLength - 1] == '"' {
            return substr(value, 1, -1);
        }
        return value;
    }
}
