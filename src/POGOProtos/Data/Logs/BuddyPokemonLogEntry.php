<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Data/Logs/BuddyPokemonLogEntry.php');

namespace POGOProtos\Data\Logs {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // enum POGOProtos.Data.Logs.BuddyPokemonLogEntry.Result
  abstract class BuddyPokemonLogEntry_Result extends ProtobufEnum {
    const NONE = 0;
    const CANDY_FOUND = 1;

    public static $_values = array(
      0 => "NONE",
      1 => "CANDY_FOUND",
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

  // message POGOProtos.Data.Logs.BuddyPokemonLogEntry
  final class BuddyPokemonLogEntry extends ProtobufMessage {

    private $_unknown;
    private $result = \POGOProtos\Data\Logs\BuddyPokemonLogEntry_Result::NONE; // optional .POGOProtos.Data.Logs.BuddyPokemonLogEntry.Result result = 1
    private $pokemonId = \POGOProtos\Enums\PokemonId::MISSINGNO; // optional .POGOProtos.Enums.PokemonId pokemon_id = 2
    private $amount = 0; // optional int32 amount = 3

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
          case 1: // optional .POGOProtos.Data.Logs.BuddyPokemonLogEntry.Result result = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->result = $tmp;

            break;
          case 2: // optional .POGOProtos.Enums.PokemonId pokemon_id = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->pokemonId = $tmp;

            break;
          case 3: // optional int32 amount = 3
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->amount = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->result !== \POGOProtos\Data\Logs\BuddyPokemonLogEntry_Result::NONE) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->result);
      }
      if ($this->pokemonId !== \POGOProtos\Enums\PokemonId::MISSINGNO) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->pokemonId);
      }
      if ($this->amount !== 0) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $this->amount);
      }
    }

    public function size() {
      $size = 0;
      if ($this->result !== \POGOProtos\Data\Logs\BuddyPokemonLogEntry_Result::NONE) {
        $size += 1 + Protobuf::size_varint($this->result);
      }
      if ($this->pokemonId !== \POGOProtos\Enums\PokemonId::MISSINGNO) {
        $size += 1 + Protobuf::size_varint($this->pokemonId);
      }
      if ($this->amount !== 0) {
        $size += 1 + Protobuf::size_varint($this->amount);
      }
      return $size;
    }

    public function clearResult() { $this->result = \POGOProtos\Data\Logs\BuddyPokemonLogEntry_Result::NONE; }
    public function getResult() { return $this->result;}
    public function setResult($value) { $this->result = $value; }

    public function clearPokemonId() { $this->pokemonId = \POGOProtos\Enums\PokemonId::MISSINGNO; }
    public function getPokemonId() { return $this->pokemonId;}
    public function setPokemonId($value) { $this->pokemonId = $value; }

    public function clearAmount() { $this->amount = 0; }
    public function getAmount() { return $this->amount;}
    public function setAmount($value) { $this->amount = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('result', $this->result, \POGOProtos\Data\Logs\BuddyPokemonLogEntry_Result::NONE)
           . Protobuf::toString('pokemon_id', $this->pokemonId, \POGOProtos\Enums\PokemonId::MISSINGNO)
           . Protobuf::toString('amount', $this->amount, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Data.Logs.BuddyPokemonLogEntry)
  }

}