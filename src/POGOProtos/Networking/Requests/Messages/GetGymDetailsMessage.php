<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Requests/Messages/GetGymDetailsMessage.php');

namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // message POGOProtos.Networking.Requests.Messages.GetGymDetailsMessage
  final class GetGymDetailsMessage extends ProtobufMessage {

    private $_unknown;
    private $gymId = ""; // optional string gym_id = 1
    private $playerLatitude = 0; // optional double player_latitude = 2
    private $playerLongitude = 0; // optional double player_longitude = 3
    private $gymLatitude = 0; // optional double gym_latitude = 4
    private $gymLongitude = 0; // optional double gym_longitude = 5
    private $clientVersion = ""; // optional string client_version = 6

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
          case 1: // optional string gym_id = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->gymId = $tmp;

            break;
          case 2: // optional double player_latitude = 2
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->playerLatitude = $tmp;

            break;
          case 3: // optional double player_longitude = 3
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->playerLongitude = $tmp;

            break;
          case 4: // optional double gym_latitude = 4
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->gymLatitude = $tmp;

            break;
          case 5: // optional double gym_longitude = 5
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->gymLongitude = $tmp;

            break;
          case 6: // optional string client_version = 6
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->clientVersion = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->gymId !== "") {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, strlen($this->gymId));
        fwrite($fp, $this->gymId);
      }
      if ($this->playerLatitude !== 0) {
        fwrite($fp, "\x11", 1);
        Protobuf::write_double($fp, $this->playerLatitude);
      }
      if ($this->playerLongitude !== 0) {
        fwrite($fp, "\x19", 1);
        Protobuf::write_double($fp, $this->playerLongitude);
      }
      if ($this->gymLatitude !== 0) {
        fwrite($fp, "!", 1);
        Protobuf::write_double($fp, $this->gymLatitude);
      }
      if ($this->gymLongitude !== 0) {
        fwrite($fp, ")", 1);
        Protobuf::write_double($fp, $this->gymLongitude);
      }
      if ($this->clientVersion !== "") {
        fwrite($fp, "2", 1);
        Protobuf::write_varint($fp, strlen($this->clientVersion));
        fwrite($fp, $this->clientVersion);
      }
    }

    public function size() {
      $size = 0;
      if ($this->gymId !== "") {
        $l = strlen($this->gymId);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->playerLatitude !== 0) {
        $size += 9;
      }
      if ($this->playerLongitude !== 0) {
        $size += 9;
      }
      if ($this->gymLatitude !== 0) {
        $size += 9;
      }
      if ($this->gymLongitude !== 0) {
        $size += 9;
      }
      if ($this->clientVersion !== "") {
        $l = strlen($this->clientVersion);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearGymId() { $this->gymId = ""; }
    public function getGymId() { return $this->gymId;}
    public function setGymId($value) { $this->gymId = $value; }

    public function clearPlayerLatitude() { $this->playerLatitude = 0; }
    public function getPlayerLatitude() { return $this->playerLatitude;}
    public function setPlayerLatitude($value) { $this->playerLatitude = $value; }

    public function clearPlayerLongitude() { $this->playerLongitude = 0; }
    public function getPlayerLongitude() { return $this->playerLongitude;}
    public function setPlayerLongitude($value) { $this->playerLongitude = $value; }

    public function clearGymLatitude() { $this->gymLatitude = 0; }
    public function getGymLatitude() { return $this->gymLatitude;}
    public function setGymLatitude($value) { $this->gymLatitude = $value; }

    public function clearGymLongitude() { $this->gymLongitude = 0; }
    public function getGymLongitude() { return $this->gymLongitude;}
    public function setGymLongitude($value) { $this->gymLongitude = $value; }

    public function clearClientVersion() { $this->clientVersion = ""; }
    public function getClientVersion() { return $this->clientVersion;}
    public function setClientVersion($value) { $this->clientVersion = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('gym_id', $this->gymId, "")
           . Protobuf::toString('player_latitude', $this->playerLatitude, 0)
           . Protobuf::toString('player_longitude', $this->playerLongitude, 0)
           . Protobuf::toString('gym_latitude', $this->gymLatitude, 0)
           . Protobuf::toString('gym_longitude', $this->gymLongitude, 0)
           . Protobuf::toString('client_version', $this->clientVersion, "");
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.GetGymDetailsMessage)
  }

}