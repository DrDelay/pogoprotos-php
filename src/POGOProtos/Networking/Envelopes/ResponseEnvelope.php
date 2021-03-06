<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Envelopes/ResponseEnvelope.php');

namespace POGOProtos\Networking\Envelopes {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;



  // message POGOProtos.Networking.Envelopes.ResponseEnvelope.PlatformResponse
  final class ResponseEnvelope_PlatformResponse extends ProtobufMessage {

    private $_unknown;
    private $type = \POGOProtos\Networking\Platform\PlatformRequestType::METHOD_NONE; // optional .POGOProtos.Networking.Platform.PlatformRequestType type = 1
    private $response = ""; // optional bytes response = 2

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
          case 1: // optional .POGOProtos.Networking.Platform.PlatformRequestType type = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->type = $tmp;

            break;
          case 2: // optional bytes response = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->response = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->type !== \POGOProtos\Networking\Platform\PlatformRequestType::METHOD_NONE) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->type);
      }
      if ($this->response !== "") {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, strlen($this->response));
        fwrite($fp, $this->response);
      }
    }

    public function size() {
      $size = 0;
      if ($this->type !== \POGOProtos\Networking\Platform\PlatformRequestType::METHOD_NONE) {
        $size += 1 + Protobuf::size_varint($this->type);
      }
      if ($this->response !== "") {
        $l = strlen($this->response);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearType() { $this->type = \POGOProtos\Networking\Platform\PlatformRequestType::METHOD_NONE; }
    public function getType() { return $this->type;}
    public function setType($value) { $this->type = $value; }

    public function clearResponse() { $this->response = ""; }
    public function getResponse() { return $this->response;}
    public function setResponse($value) { $this->response = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('type', $this->type, \POGOProtos\Networking\Platform\PlatformRequestType::METHOD_NONE)
           . Protobuf::toString('response', $this->response, "");
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Envelopes.ResponseEnvelope.PlatformResponse)
  }

  // enum POGOProtos.Networking.Envelopes.ResponseEnvelope.StatusCode
  abstract class ResponseEnvelope_StatusCode extends ProtobufEnum {
    const UNKNOWN = 0;
    const OK = 1;
    const OK_RPC_URL_IN_RESPONSE = 2;
    const BAD_REQUEST = 3;
    const INVALID_REQUEST = 51;
    const INVALID_PLATFORM_REQUEST = 52;
    const REDIRECT = 53;
    const SESSION_INVALIDATED = 100;
    const INVALID_AUTH_TOKEN = 102;

    public static $_values = array(
      0 => "UNKNOWN",
      1 => "OK",
      2 => "OK_RPC_URL_IN_RESPONSE",
      3 => "BAD_REQUEST",
      51 => "INVALID_REQUEST",
      52 => "INVALID_PLATFORM_REQUEST",
      53 => "REDIRECT",
      100 => "SESSION_INVALIDATED",
      102 => "INVALID_AUTH_TOKEN",
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

  // message POGOProtos.Networking.Envelopes.ResponseEnvelope
  final class ResponseEnvelope extends ProtobufMessage {

    private $_unknown;
    private $statusCode = \POGOProtos\Networking\Envelopes\ResponseEnvelope_StatusCode::UNKNOWN; // optional .POGOProtos.Networking.Envelopes.ResponseEnvelope.StatusCode status_code = 1
    private $requestId = 0; // optional uint64 request_id = 2
    private $apiUrl = ""; // optional string api_url = 3
    private $platformReturns = array(); // repeated .POGOProtos.Networking.Envelopes.ResponseEnvelope.PlatformResponse platform_returns = 6
    private $authTicket = null; // optional .POGOProtos.Networking.Envelopes.AuthTicket auth_ticket = 7
    private $returns = array(); // repeated bytes returns = 100
    private $error = ""; // optional string error = 101

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
          case 1: // optional .POGOProtos.Networking.Envelopes.ResponseEnvelope.StatusCode status_code = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->statusCode = $tmp;

            break;
          case 2: // optional uint64 request_id = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_UINT64 || $tmp > Protobuf::MAX_UINT64) throw new \Exception('uint64 out of range');$this->requestId = $tmp;

            break;
          case 3: // optional string api_url = 3
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->apiUrl = $tmp;

            break;
          case 6: // repeated .POGOProtos.Networking.Envelopes.ResponseEnvelope.PlatformResponse platform_returns = 6
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->platformReturns[] = new \POGOProtos\Networking\Envelopes\ResponseEnvelope_PlatformResponse($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Networking\Envelopes\ResponseEnvelope_PlatformResponse did not read the full length');

            break;
          case 7: // optional .POGOProtos.Networking.Envelopes.AuthTicket auth_ticket = 7
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->authTicket = new \POGOProtos\Networking\Envelopes\AuthTicket($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Networking\Envelopes\AuthTicket did not read the full length');

            break;
          case 100: // repeated bytes returns = 100
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->returns[] = $tmp;

            break;
          case 101: // optional string error = 101
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->error = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->statusCode !== \POGOProtos\Networking\Envelopes\ResponseEnvelope_StatusCode::UNKNOWN) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->statusCode);
      }
      if ($this->requestId !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->requestId);
      }
      if ($this->apiUrl !== "") {
        fwrite($fp, "\x1a", 1);
        Protobuf::write_varint($fp, strlen($this->apiUrl));
        fwrite($fp, $this->apiUrl);
      }
      foreach($this->platformReturns as $v) {
        fwrite($fp, "2", 1);
        Protobuf::write_varint($fp, $v->size());
        $v->write($fp);
      }
      if ($this->authTicket !== null) {
        fwrite($fp, ":", 1);
        Protobuf::write_varint($fp, $this->authTicket->size());
        $this->authTicket->write($fp);
      }
      foreach($this->returns as $v) {
        fwrite($fp, "\xa2\x06", 2);
        Protobuf::write_varint($fp, strlen($v));
        fwrite($fp, $v);
      }
      if ($this->error !== "") {
        fwrite($fp, "\xaa\x06", 2);
        Protobuf::write_varint($fp, strlen($this->error));
        fwrite($fp, $this->error);
      }
    }

    public function size() {
      $size = 0;
      if ($this->statusCode !== \POGOProtos\Networking\Envelopes\ResponseEnvelope_StatusCode::UNKNOWN) {
        $size += 1 + Protobuf::size_varint($this->statusCode);
      }
      if ($this->requestId !== 0) {
        $size += 1 + Protobuf::size_varint($this->requestId);
      }
      if ($this->apiUrl !== "") {
        $l = strlen($this->apiUrl);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->platformReturns as $v) {
        $l = $v->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->authTicket !== null) {
        $l = $this->authTicket->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->returns as $v) {
        $l = strlen($v);
        $size += 2 + Protobuf::size_varint($l) + $l;
      }
      if ($this->error !== "") {
        $l = strlen($this->error);
        $size += 2 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearStatusCode() { $this->statusCode = \POGOProtos\Networking\Envelopes\ResponseEnvelope_StatusCode::UNKNOWN; }
    public function getStatusCode() { return $this->statusCode;}
    public function setStatusCode($value) { $this->statusCode = $value; }

    public function clearRequestId() { $this->requestId = 0; }
    public function getRequestId() { return $this->requestId;}
    public function setRequestId($value) { $this->requestId = $value; }

    public function clearApiUrl() { $this->apiUrl = ""; }
    public function getApiUrl() { return $this->apiUrl;}
    public function setApiUrl($value) { $this->apiUrl = $value; }

    public function clearPlatformReturns() { $this->platformReturns = array(); }
    public function getPlatformReturnsCount() { return count($this->platformReturns); }
    public function getPlatformReturns($index) { return $this->platformReturns[$index]; }
    public function getPlatformReturnsArray() { return $this->platformReturns; }
    public function setPlatformReturns($index, array $value) {$this->platformReturns[$index] = $value; }
    public function addPlatformReturns(array $value) { $this->platformReturns[] = $value; }
    public function addAllPlatformReturns(array $values) { foreach($values as $value) {$this->platformReturns[] = $value; }}

    public function clearAuthTicket() { $this->authTicket = null; }
    public function getAuthTicket() { return $this->authTicket;}
    public function setAuthTicket(\POGOProtos\Networking\Envelopes\AuthTicket $value) { $this->authTicket = $value; }

    public function clearReturns() { $this->returns = array(); }
    public function getReturnsCount() { return count($this->returns); }
    public function getReturns($index) { return $this->returns[$index]; }
    public function getReturnsArray() { return $this->returns; }
    public function setReturns($index, array $value) {$this->returns[$index] = $value; }
    public function addReturns(array $value) { $this->returns[] = $value; }
    public function addAllReturns(array $values) { foreach($values as $value) {$this->returns[] = $value; }}

    public function clearError() { $this->error = ""; }
    public function getError() { return $this->error;}
    public function setError($value) { $this->error = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('status_code', $this->statusCode, \POGOProtos\Networking\Envelopes\ResponseEnvelope_StatusCode::UNKNOWN)
           . Protobuf::toString('request_id', $this->requestId, 0)
           . Protobuf::toString('api_url', $this->apiUrl, "")
           . Protobuf::toString('platform_returns', $this->platformReturns, null)
           . Protobuf::toString('auth_ticket', $this->authTicket, null)
           . Protobuf::toString('returns', $this->returns, "")
           . Protobuf::toString('error', $this->error, "");
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Envelopes.ResponseEnvelope)
  }

}