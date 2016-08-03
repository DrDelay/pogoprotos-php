<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Enums/Gender.php');

namespace POGOProtos\Enums {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // enum POGOProtos.Enums.Gender
  abstract class Gender extends ProtobufEnum {
    const MALE = 0;
    const FEMALE = 1;

    public static $_values = array(
      0 => "MALE",
      1 => "FEMALE",
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

}