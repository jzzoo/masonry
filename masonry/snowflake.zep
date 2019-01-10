namespace Masonry;

class Snowflake
{

    protected workId = 0;

    protected static result_set = [];

    protected static cardinality = 0;

    public function __construct( var workId = 0 ){
        let this->workId = workId;
    }

    public function createId() {

    }


    protected function currentTime() {

    }

    protected function followsTime( var lastTimestamp ) {

    }


}
