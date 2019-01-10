namespace Masonry;

class Chaos
{
    public function encode(var data) {
        return base64_encode( dechex( data ) );
    }

    public function decode(var data) {
        return hexdec(base64_decode( data ));
    }
}
