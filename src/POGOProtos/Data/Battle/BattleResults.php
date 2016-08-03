<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Data/Battle/BattleResults.php');

namespace POGOProtos\Data\Battle {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Data.Battle.BattleResults
  final class BattleResults extends ProtobufMessage {

    private $_unknown;
    private $gymState = null; // optional .POGOProtos.Data.Gym.GymState gym_state = 1
    private $attackers = array(); // repeated .POGOProtos.Data.Battle.BattleParticipant attackers = 2
    private $playerExperienceAwarded = array(); // repeated int32 player_experience_awarded = 3
    private $nextDefenderPokemonId = 0; // optional int64 next_defender_pokemon_id = 4
    private $gymPointsDelta = 0; // optional int32 gym_points_delta = 5

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
          case 1: // optional .POGOProtos.Data.Gym.GymState gym_state = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->gymState = new \POGOProtos\Data\Gym\GymState($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Data\Gym\GymState did not read the full length');

            break;
          case 2: // repeated .POGOProtos.Data.Battle.BattleParticipant attackers = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->attackers[] = new \POGOProtos\Data\Battle\BattleParticipant($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Data\Battle\BattleParticipant did not read the full length');

            break;
          case 3: // repeated int32 player_experience_awarded = 3
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_signed_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->playerExperienceAwarded[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_signed_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->playerExperienceAwarded[] = $tmp;
              }
            }

            break;
          case 4: // optional int64 next_defender_pokemon_id = 4
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->nextDefenderPokemonId = $tmp;

            break;
          case 5: // optional int32 gym_points_delta = 5
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->gymPointsDelta = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->gymState !== null) {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, $this->gymState->size());
        $this->gymState->write($fp);
      }
      foreach($this->attackers as $v) {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, $v->size());
        $v->write($fp);
      }
      foreach($this->playerExperienceAwarded as $v) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $v);
      }
      if ($this->nextDefenderPokemonId !== 0) {
        fwrite($fp, " ", 1);
        Protobuf::write_varint($fp, $this->nextDefenderPokemonId);
      }
      if ($this->gymPointsDelta !== 0) {
        fwrite($fp, "(", 1);
        Protobuf::write_varint($fp, $this->gymPointsDelta);
      }
    }

    public function size() {
      $size = 0;
      if ($this->gymState !== null) {
        $l = $this->gymState->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->attackers as $v) {
        $l = $v->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->playerExperienceAwarded as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->nextDefenderPokemonId !== 0) {
        $size += 1 + Protobuf::size_varint($this->nextDefenderPokemonId);
      }
      if ($this->gymPointsDelta !== 0) {
        $size += 1 + Protobuf::size_varint($this->gymPointsDelta);
      }
      return $size;
    }

    public function clearGymState() { $this->gymState = null; }
    public function getGymState() { return $this->gymState;}
    public function setGymState(\POGOProtos\Data\Gym\GymState $value) { $this->gymState = $value; }

    public function clearAttackers() { $this->attackers = array(); }
    public function getAttackersCount() { return count($this->attackers); }
    public function getAttackers($index) { return $this->attackers[$index]; }
    public function getAttackersArray() { return $this->attackers; }
    public function setAttackers($index, array $value) {$this->attackers[$index] = $value; }
    public function addAttackers(array $value) { $this->attackers[] = $value; }
    public function addAllAttackers(array $values) { foreach($values as $value) {$this->attackers[] = $value; }}

    public function clearPlayerExperienceAwarded() { $this->playerExperienceAwarded = array(); }
    public function getPlayerExperienceAwardedCount() { return count($this->playerExperienceAwarded); }
    public function getPlayerExperienceAwarded($index) { return $this->playerExperienceAwarded[$index]; }
    public function getPlayerExperienceAwardedArray() { return $this->playerExperienceAwarded; }
    public function setPlayerExperienceAwarded($index, array $value) {$this->playerExperienceAwarded[$index] = $value; }
    public function addPlayerExperienceAwarded(array $value) { $this->playerExperienceAwarded[] = $value; }
    public function addAllPlayerExperienceAwarded(array $values) { foreach($values as $value) {$this->playerExperienceAwarded[] = $value; }}

    public function clearNextDefenderPokemonId() { $this->nextDefenderPokemonId = 0; }
    public function getNextDefenderPokemonId() { return $this->nextDefenderPokemonId;}
    public function setNextDefenderPokemonId($value) { $this->nextDefenderPokemonId = $value; }

    public function clearGymPointsDelta() { $this->gymPointsDelta = 0; }
    public function getGymPointsDelta() { return $this->gymPointsDelta;}
    public function setGymPointsDelta($value) { $this->gymPointsDelta = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('gym_state', $this->gymState, null)
           . Protobuf::toString('attackers', $this->attackers, null)
           . Protobuf::toString('player_experience_awarded', $this->playerExperienceAwarded, 0)
           . Protobuf::toString('next_defender_pokemon_id', $this->nextDefenderPokemonId, 0)
           . Protobuf::toString('gym_points_delta', $this->gymPointsDelta, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Data.Battle.BattleResults)
  }

}