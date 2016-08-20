<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Map/Fort/FortData.php');

namespace POGOProtos\Map\Fort {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Map.Fort.FortData
  final class FortData extends ProtobufMessage {

    private $_unknown;
    private $id = ""; // optional string id = 1
    private $lastModifiedTimestampMs = 0; // optional int64 last_modified_timestamp_ms = 2
    private $latitude = 0; // optional double latitude = 3
    private $longitude = 0; // optional double longitude = 4
    private $enabled = false; // optional bool enabled = 8
    private $type = \POGOProtos\Map\Fort\FortType::GYM; // optional .POGOProtos.Map.Fort.FortType type = 9
    private $ownedByTeam = \POGOProtos\Enums\TeamColor::NEUTRAL; // optional .POGOProtos.Enums.TeamColor owned_by_team = 5
    private $guardPokemonId = \POGOProtos\Enums\PokemonId::MISSINGNO; // optional .POGOProtos.Enums.PokemonId guard_pokemon_id = 6
    private $guardPokemonCp = 0; // optional int32 guard_pokemon_cp = 7
    private $gymPoints = 0; // optional int64 gym_points = 10
    private $isInBattle = false; // optional bool is_in_battle = 11
    private $activeFortModifier = array(); // repeated .POGOProtos.Inventory.Item.ItemId active_fort_modifier = 12
    private $lureInfo = null; // optional .POGOProtos.Map.Fort.FortLureInfo lure_info = 13
    private $cooldownCompleteTimestampMs = 0; // optional int64 cooldown_complete_timestamp_ms = 14
    private $sponsor = \POGOProtos\Map\Fort\FortSponsor::NONE_SPONSOR; // optional .POGOProtos.Map.Fort.FortSponsor sponsor = 15
    private $renderingType = \POGOProtos\Map\Fort\FortRenderingType::DEFAULT; // optional .POGOProtos.Map.Fort.FortRenderingType rendering_type = 16

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
          case 1: // optional string id = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->id = $tmp;

            break;
          case 2: // optional int64 last_modified_timestamp_ms = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->lastModifiedTimestampMs = $tmp;

            break;
          case 3: // optional double latitude = 3
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->latitude = $tmp;

            break;
          case 4: // optional double longitude = 4
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->longitude = $tmp;

            break;
          case 8: // optional bool enabled = 8
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->enabled = ($tmp > 0) ? true : false;

            break;
          case 9: // optional .POGOProtos.Map.Fort.FortType type = 9
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->type = $tmp;

            break;
          case 5: // optional .POGOProtos.Enums.TeamColor owned_by_team = 5
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->ownedByTeam = $tmp;

            break;
          case 6: // optional .POGOProtos.Enums.PokemonId guard_pokemon_id = 6
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->guardPokemonId = $tmp;

            break;
          case 7: // optional int32 guard_pokemon_cp = 7
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->guardPokemonCp = $tmp;

            break;
          case 10: // optional int64 gym_points = 10
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->gymPoints = $tmp;

            break;
          case 11: // optional bool is_in_battle = 11
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->isInBattle = ($tmp > 0) ? true : false;

            break;
          case 12: // repeated .POGOProtos.Inventory.Item.ItemId active_fort_modifier = 12
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              $this->activeFortModifier[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                $this->activeFortModifier[] = $tmp;
              }
            }

            break;
          case 13: // optional .POGOProtos.Map.Fort.FortLureInfo lure_info = 13
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->lureInfo = new \POGOProtos\Map\Fort\FortLureInfo($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Map\Fort\FortLureInfo did not read the full length');

            break;
          case 14: // optional int64 cooldown_complete_timestamp_ms = 14
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->cooldownCompleteTimestampMs = $tmp;

            break;
          case 15: // optional .POGOProtos.Map.Fort.FortSponsor sponsor = 15
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->sponsor = $tmp;

            break;
          case 16: // optional .POGOProtos.Map.Fort.FortRenderingType rendering_type = 16
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->renderingType = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->id !== "") {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, strlen($this->id));
        fwrite($fp, $this->id);
      }
      if ($this->lastModifiedTimestampMs !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->lastModifiedTimestampMs);
      }
      if ($this->latitude !== 0) {
        fwrite($fp, "\x19", 1);
        Protobuf::write_double($fp, $this->latitude);
      }
      if ($this->longitude !== 0) {
        fwrite($fp, "!", 1);
        Protobuf::write_double($fp, $this->longitude);
      }
      if ($this->enabled !== false) {
        fwrite($fp, "@", 1);
        Protobuf::write_varint($fp, $this->enabled ? 1 : 0);
      }
      if ($this->type !== \POGOProtos\Map\Fort\FortType::GYM) {
        fwrite($fp, "H", 1);
        Protobuf::write_varint($fp, $this->type);
      }
      if ($this->ownedByTeam !== \POGOProtos\Enums\TeamColor::NEUTRAL) {
        fwrite($fp, "(", 1);
        Protobuf::write_varint($fp, $this->ownedByTeam);
      }
      if ($this->guardPokemonId !== \POGOProtos\Enums\PokemonId::MISSINGNO) {
        fwrite($fp, "0", 1);
        Protobuf::write_varint($fp, $this->guardPokemonId);
      }
      if ($this->guardPokemonCp !== 0) {
        fwrite($fp, "8", 1);
        Protobuf::write_varint($fp, $this->guardPokemonCp);
      }
      if ($this->gymPoints !== 0) {
        fwrite($fp, "P", 1);
        Protobuf::write_varint($fp, $this->gymPoints);
      }
      if ($this->isInBattle !== false) {
        fwrite($fp, "X", 1);
        Protobuf::write_varint($fp, $this->isInBattle ? 1 : 0);
      }
      foreach($this->activeFortModifier as $v) {
        fwrite($fp, "`", 1);
        Protobuf::write_varint($fp, $v);
      }
      if ($this->lureInfo !== null) {
        fwrite($fp, "j", 1);
        Protobuf::write_varint($fp, $this->lureInfo->size());
        $this->lureInfo->write($fp);
      }
      if ($this->cooldownCompleteTimestampMs !== 0) {
        fwrite($fp, "p", 1);
        Protobuf::write_varint($fp, $this->cooldownCompleteTimestampMs);
      }
      if ($this->sponsor !== \POGOProtos\Map\Fort\FortSponsor::NONE_SPONSOR) {
        fwrite($fp, "x", 1);
        Protobuf::write_varint($fp, $this->sponsor);
      }
      if ($this->renderingType !== \POGOProtos\Map\Fort\FortRenderingType::DEFAULT) {
        fwrite($fp, "\x80\x01", 2);
        Protobuf::write_varint($fp, $this->renderingType);
      }
    }

    public function size() {
      $size = 0;
      if ($this->id !== "") {
        $l = strlen($this->id);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->lastModifiedTimestampMs !== 0) {
        $size += 1 + Protobuf::size_varint($this->lastModifiedTimestampMs);
      }
      if ($this->latitude !== 0) {
        $size += 9;
      }
      if ($this->longitude !== 0) {
        $size += 9;
      }
      if ($this->enabled !== false) {
        $size += 2;
      }
      if ($this->type !== \POGOProtos\Map\Fort\FortType::GYM) {
        $size += 1 + Protobuf::size_varint($this->type);
      }
      if ($this->ownedByTeam !== \POGOProtos\Enums\TeamColor::NEUTRAL) {
        $size += 1 + Protobuf::size_varint($this->ownedByTeam);
      }
      if ($this->guardPokemonId !== \POGOProtos\Enums\PokemonId::MISSINGNO) {
        $size += 1 + Protobuf::size_varint($this->guardPokemonId);
      }
      if ($this->guardPokemonCp !== 0) {
        $size += 1 + Protobuf::size_varint($this->guardPokemonCp);
      }
      if ($this->gymPoints !== 0) {
        $size += 1 + Protobuf::size_varint($this->gymPoints);
      }
      if ($this->isInBattle !== false) {
        $size += 2;
      }
      foreach($this->activeFortModifier as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->lureInfo !== null) {
        $l = $this->lureInfo->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->cooldownCompleteTimestampMs !== 0) {
        $size += 1 + Protobuf::size_varint($this->cooldownCompleteTimestampMs);
      }
      if ($this->sponsor !== \POGOProtos\Map\Fort\FortSponsor::NONE_SPONSOR) {
        $size += 1 + Protobuf::size_varint($this->sponsor);
      }
      if ($this->renderingType !== \POGOProtos\Map\Fort\FortRenderingType::DEFAULT) {
        $size += 2 + Protobuf::size_varint($this->renderingType);
      }
      return $size;
    }

    public function clearId() { $this->id = ""; }
    public function getId() { return $this->id;}
    public function setId($value) { $this->id = $value; }

    public function clearLastModifiedTimestampMs() { $this->lastModifiedTimestampMs = 0; }
    public function getLastModifiedTimestampMs() { return $this->lastModifiedTimestampMs;}
    public function setLastModifiedTimestampMs($value) { $this->lastModifiedTimestampMs = $value; }

    public function clearLatitude() { $this->latitude = 0; }
    public function getLatitude() { return $this->latitude;}
    public function setLatitude($value) { $this->latitude = $value; }

    public function clearLongitude() { $this->longitude = 0; }
    public function getLongitude() { return $this->longitude;}
    public function setLongitude($value) { $this->longitude = $value; }

    public function clearEnabled() { $this->enabled = false; }
    public function getEnabled() { return $this->enabled;}
    public function setEnabled($value) { $this->enabled = $value; }

    public function clearType() { $this->type = \POGOProtos\Map\Fort\FortType::GYM; }
    public function getType() { return $this->type;}
    public function setType($value) { $this->type = $value; }

    public function clearOwnedByTeam() { $this->ownedByTeam = \POGOProtos\Enums\TeamColor::NEUTRAL; }
    public function getOwnedByTeam() { return $this->ownedByTeam;}
    public function setOwnedByTeam($value) { $this->ownedByTeam = $value; }

    public function clearGuardPokemonId() { $this->guardPokemonId = \POGOProtos\Enums\PokemonId::MISSINGNO; }
    public function getGuardPokemonId() { return $this->guardPokemonId;}
    public function setGuardPokemonId($value) { $this->guardPokemonId = $value; }

    public function clearGuardPokemonCp() { $this->guardPokemonCp = 0; }
    public function getGuardPokemonCp() { return $this->guardPokemonCp;}
    public function setGuardPokemonCp($value) { $this->guardPokemonCp = $value; }

    public function clearGymPoints() { $this->gymPoints = 0; }
    public function getGymPoints() { return $this->gymPoints;}
    public function setGymPoints($value) { $this->gymPoints = $value; }

    public function clearIsInBattle() { $this->isInBattle = false; }
    public function getIsInBattle() { return $this->isInBattle;}
    public function setIsInBattle($value) { $this->isInBattle = $value; }

    public function clearActiveFortModifier() { $this->activeFortModifier = array(); }
    public function getActiveFortModifierCount() { return count($this->activeFortModifier); }
    public function getActiveFortModifier($index) { return $this->activeFortModifier[$index]; }
    public function getActiveFortModifierArray() { return $this->activeFortModifier; }
    public function setActiveFortModifier($index, array $value) {$this->activeFortModifier[$index] = $value; }
    public function addActiveFortModifier(array $value) { $this->activeFortModifier[] = $value; }
    public function addAllActiveFortModifier(array $values) { foreach($values as $value) {$this->activeFortModifier[] = $value; }}

    public function clearLureInfo() { $this->lureInfo = null; }
    public function getLureInfo() { return $this->lureInfo;}
    public function setLureInfo(\POGOProtos\Map\Fort\FortLureInfo $value) { $this->lureInfo = $value; }

    public function clearCooldownCompleteTimestampMs() { $this->cooldownCompleteTimestampMs = 0; }
    public function getCooldownCompleteTimestampMs() { return $this->cooldownCompleteTimestampMs;}
    public function setCooldownCompleteTimestampMs($value) { $this->cooldownCompleteTimestampMs = $value; }

    public function clearSponsor() { $this->sponsor = \POGOProtos\Map\Fort\FortSponsor::NONE_SPONSOR; }
    public function getSponsor() { return $this->sponsor;}
    public function setSponsor($value) { $this->sponsor = $value; }

    public function clearRenderingType() { $this->renderingType = \POGOProtos\Map\Fort\FortRenderingType::DEFAULT; }
    public function getRenderingType() { return $this->renderingType;}
    public function setRenderingType($value) { $this->renderingType = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('id', $this->id, "")
           . Protobuf::toString('last_modified_timestamp_ms', $this->lastModifiedTimestampMs, 0)
           . Protobuf::toString('latitude', $this->latitude, 0)
           . Protobuf::toString('longitude', $this->longitude, 0)
           . Protobuf::toString('enabled', $this->enabled, false)
           . Protobuf::toString('type', $this->type, \POGOProtos\Map\Fort\FortType::GYM)
           . Protobuf::toString('owned_by_team', $this->ownedByTeam, \POGOProtos\Enums\TeamColor::NEUTRAL)
           . Protobuf::toString('guard_pokemon_id', $this->guardPokemonId, \POGOProtos\Enums\PokemonId::MISSINGNO)
           . Protobuf::toString('guard_pokemon_cp', $this->guardPokemonCp, 0)
           . Protobuf::toString('gym_points', $this->gymPoints, 0)
           . Protobuf::toString('is_in_battle', $this->isInBattle, false)
           . Protobuf::toString('active_fort_modifier', $this->activeFortModifier, \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN)
           . Protobuf::toString('lure_info', $this->lureInfo, null)
           . Protobuf::toString('cooldown_complete_timestamp_ms', $this->cooldownCompleteTimestampMs, 0)
           . Protobuf::toString('sponsor', $this->sponsor, \POGOProtos\Map\Fort\FortSponsor::NONE_SPONSOR)
           . Protobuf::toString('rendering_type', $this->renderingType, \POGOProtos\Map\Fort\FortRenderingType::DEFAULT);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Map.Fort.FortData)
  }

}