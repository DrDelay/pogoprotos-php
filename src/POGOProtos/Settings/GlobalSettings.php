<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/GlobalSettings.php');

namespace POGOProtos\Settings {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Settings.GlobalSettings
  final class GlobalSettings extends ProtobufMessage {

    private $_unknown;
    private $fortSettings = null; // optional .POGOProtos.Settings.FortSettings fort_settings = 2
    private $mapSettings = null; // optional .POGOProtos.Settings.MapSettings map_settings = 3
    private $levelSettings = null; // optional .POGOProtos.Settings.LevelSettings level_settings = 4
    private $inventorySettings = null; // optional .POGOProtos.Settings.InventorySettings inventory_settings = 5
    private $minimumClientVersion = ""; // optional string minimum_client_version = 6

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
          case 2: // optional .POGOProtos.Settings.FortSettings fort_settings = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->fortSettings = new \POGOProtos\Settings\FortSettings($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Settings\FortSettings did not read the full length');

            break;
          case 3: // optional .POGOProtos.Settings.MapSettings map_settings = 3
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->mapSettings = new \POGOProtos\Settings\MapSettings($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Settings\MapSettings did not read the full length');

            break;
          case 4: // optional .POGOProtos.Settings.LevelSettings level_settings = 4
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->levelSettings = new \POGOProtos\Settings\LevelSettings($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Settings\LevelSettings did not read the full length');

            break;
          case 5: // optional .POGOProtos.Settings.InventorySettings inventory_settings = 5
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->inventorySettings = new \POGOProtos\Settings\InventorySettings($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Settings\InventorySettings did not read the full length');

            break;
          case 6: // optional string minimum_client_version = 6
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->minimumClientVersion = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->fortSettings !== null) {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, $this->fortSettings->size());
        $this->fortSettings->write($fp);
      }
      if ($this->mapSettings !== null) {
        fwrite($fp, "\x1a", 1);
        Protobuf::write_varint($fp, $this->mapSettings->size());
        $this->mapSettings->write($fp);
      }
      if ($this->levelSettings !== null) {
        fwrite($fp, "\"", 1);
        Protobuf::write_varint($fp, $this->levelSettings->size());
        $this->levelSettings->write($fp);
      }
      if ($this->inventorySettings !== null) {
        fwrite($fp, "*", 1);
        Protobuf::write_varint($fp, $this->inventorySettings->size());
        $this->inventorySettings->write($fp);
      }
      if ($this->minimumClientVersion !== "") {
        fwrite($fp, "2", 1);
        Protobuf::write_varint($fp, strlen($this->minimumClientVersion));
        fwrite($fp, $this->minimumClientVersion);
      }
    }

    public function size() {
      $size = 0;
      if ($this->fortSettings !== null) {
        $l = $this->fortSettings->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->mapSettings !== null) {
        $l = $this->mapSettings->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->levelSettings !== null) {
        $l = $this->levelSettings->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->inventorySettings !== null) {
        $l = $this->inventorySettings->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->minimumClientVersion !== "") {
        $l = strlen($this->minimumClientVersion);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearFortSettings() { $this->fortSettings = null; }
    public function getFortSettings() { return $this->fortSettings;}
    public function setFortSettings(\POGOProtos\Settings\FortSettings $value) { $this->fortSettings = $value; }

    public function clearMapSettings() { $this->mapSettings = null; }
    public function getMapSettings() { return $this->mapSettings;}
    public function setMapSettings(\POGOProtos\Settings\MapSettings $value) { $this->mapSettings = $value; }

    public function clearLevelSettings() { $this->levelSettings = null; }
    public function getLevelSettings() { return $this->levelSettings;}
    public function setLevelSettings(\POGOProtos\Settings\LevelSettings $value) { $this->levelSettings = $value; }

    public function clearInventorySettings() { $this->inventorySettings = null; }
    public function getInventorySettings() { return $this->inventorySettings;}
    public function setInventorySettings(\POGOProtos\Settings\InventorySettings $value) { $this->inventorySettings = $value; }

    public function clearMinimumClientVersion() { $this->minimumClientVersion = ""; }
    public function getMinimumClientVersion() { return $this->minimumClientVersion;}
    public function setMinimumClientVersion($value) { $this->minimumClientVersion = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('fort_settings', $this->fortSettings, null)
           . Protobuf::toString('map_settings', $this->mapSettings, null)
           . Protobuf::toString('level_settings', $this->levelSettings, null)
           . Protobuf::toString('inventory_settings', $this->inventorySettings, null)
           . Protobuf::toString('minimum_client_version', $this->minimumClientVersion, "");
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.GlobalSettings)
  }

}