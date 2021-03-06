<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Requests/Messages/GetPlayerMessage.php');

namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Networking.Requests.Messages.GetPlayerMessage.PlayerLocale
  final class GetPlayerMessage_PlayerLocale extends ProtobufMessage {

    private $_unknown;
    private $country = ""; // optional string country = 1
    private $language = ""; // optional string language = 2

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
          case 1: // optional string country = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->country = $tmp;

            break;
          case 2: // optional string language = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->language = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->country !== "") {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, strlen($this->country));
        fwrite($fp, $this->country);
      }
      if ($this->language !== "") {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, strlen($this->language));
        fwrite($fp, $this->language);
      }
    }

    public function size() {
      $size = 0;
      if ($this->country !== "") {
        $l = strlen($this->country);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->language !== "") {
        $l = strlen($this->language);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearCountry() { $this->country = ""; }
    public function getCountry() { return $this->country;}
    public function setCountry($value) { $this->country = $value; }

    public function clearLanguage() { $this->language = ""; }
    public function getLanguage() { return $this->language;}
    public function setLanguage($value) { $this->language = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('country', $this->country, "")
           . Protobuf::toString('language', $this->language, "");
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.GetPlayerMessage.PlayerLocale)
  }

  // message POGOProtos.Networking.Requests.Messages.GetPlayerMessage
  final class GetPlayerMessage extends ProtobufMessage {

    private $_unknown;
    private $playerLocale = null; // optional .POGOProtos.Networking.Requests.Messages.GetPlayerMessage.PlayerLocale player_locale = 1

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
          case 1: // optional .POGOProtos.Networking.Requests.Messages.GetPlayerMessage.PlayerLocale player_locale = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->playerLocale = new \POGOProtos\Networking\Requests\Messages\GetPlayerMessage_PlayerLocale($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Networking\Requests\Messages\GetPlayerMessage_PlayerLocale did not read the full length');

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->playerLocale !== null) {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, $this->playerLocale->size());
        $this->playerLocale->write($fp);
      }
    }

    public function size() {
      $size = 0;
      if ($this->playerLocale !== null) {
        $l = $this->playerLocale->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearPlayerLocale() { $this->playerLocale = null; }
    public function getPlayerLocale() { return $this->playerLocale;}
    public function setPlayerLocale(\POGOProtos\Networking\Requests\Messages\GetPlayerMessage_PlayerLocale $value) { $this->playerLocale = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('player_locale', $this->playerLocale, null);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.GetPlayerMessage)
  }

}