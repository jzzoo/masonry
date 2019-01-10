namespace Masonry;

class Chaos
{
    /**
     * Encodes a numeric value and returns an unordered string.
     *
     * @param  int  data
     * @return mixed
     */
    public function encode(var data) {
        return base64_encode( dechex( data ) );
    }

    /**
     * Decodes the string and returns a value.
     *
     * @param  string  data
     * @return mixed
     */
    public function decode(var data) {
        return hexdec( base64_decode( data ) );
    }
}
