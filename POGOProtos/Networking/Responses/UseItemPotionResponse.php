<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Responses/UseItemPotionResponse.php');

namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // enum POGOProtos.Networking.Responses.UseItemPotionResponse.Result
  abstract class UseItemPotionResponse_Result extends ProtobufEnum {
    const UNSET = 0;
    const SUCCESS = 1;
    const ERROR_NO_POKEMON = 2;
    const ERROR_CANNOT_USE = 3;
    const ERROR_DEPLOYED_TO_FORT = 4;

    public static $_values = array(
      0 => "UNSET",
      1 => "SUCCESS",
      2 => "ERROR_NO_POKEMON",
      3 => "ERROR_CANNOT_USE",
      4 => "ERROR_DEPLOYED_TO_FORT",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

  // message POGOProtos.Networking.Responses.UseItemPotionResponse
  final class UseItemPotionResponse extends ProtobufMessage {

    private $_unknown;
    private $result = \POGOProtos\Networking\Responses\UseItemPotionResponse_Result::UNSET; // optional .POGOProtos.Networking.Responses.UseItemPotionResponse.Result result = 1
    private $stamina = 0; // optional int32 stamina = 2

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional .POGOProtos.Networking.Responses.UseItemPotionResponse.Result result = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->result = $tmp;

            break;
          case 2: // optional int32 stamina = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->stamina = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->result !== \POGOProtos\Networking\Responses\UseItemPotionResponse_Result::UNSET) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->result);
      }
      if ($this->stamina !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->stamina);
      }
    }

    public function size() {
      $size = 0;
      if ($this->result !== \POGOProtos\Networking\Responses\UseItemPotionResponse_Result::UNSET) {
        $size += 1 + Protobuf::size_varint($this->result);
      }
      if ($this->stamina !== 0) {
        $size += 1 + Protobuf::size_varint($this->stamina);
      }
      return $size;
    }

    public function clearResult() { $this->result = \POGOProtos\Networking\Responses\UseItemPotionResponse_Result::UNSET; }
    public function getResult() { return $this->result;}
    public function setResult($value) { $this->result = $value; }

    public function clearStamina() { $this->stamina = 0; }
    public function getStamina() { return $this->stamina;}
    public function setStamina($value) { $this->stamina = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('result', $this->result, \POGOProtos\Networking\Responses\UseItemPotionResponse_Result::UNSET)
           . Protobuf::toString('stamina', $this->stamina, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.UseItemPotionResponse)
  }

}