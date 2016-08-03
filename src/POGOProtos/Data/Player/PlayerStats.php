<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Data/Player/PlayerStats.php');

namespace POGOProtos\Data\Player {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // message POGOProtos.Data.Player.PlayerStats
  final class PlayerStats extends ProtobufMessage {

    private $_unknown;
    private $level = 0; // optional int32 level = 1
    private $experience = 0; // optional int64 experience = 2
    private $prevLevelXp = 0; // optional int64 prev_level_xp = 3
    private $nextLevelXp = 0; // optional int64 next_level_xp = 4
    private $kmWalked = 0; // optional float km_walked = 5
    private $pokemonsEncountered = 0; // optional int32 pokemons_encountered = 6
    private $uniquePokedexEntries = 0; // optional int32 unique_pokedex_entries = 7
    private $pokemonsCaptured = 0; // optional int32 pokemons_captured = 8
    private $evolutions = 0; // optional int32 evolutions = 9
    private $pokeStopVisits = 0; // optional int32 poke_stop_visits = 10
    private $pokeballsThrown = 0; // optional int32 pokeballs_thrown = 11
    private $eggsHatched = 0; // optional int32 eggs_hatched = 12
    private $bigMagikarpCaught = 0; // optional int32 big_magikarp_caught = 13
    private $battleAttackWon = 0; // optional int32 battle_attack_won = 14
    private $battleAttackTotal = 0; // optional int32 battle_attack_total = 15
    private $battleDefendedWon = 0; // optional int32 battle_defended_won = 16
    private $battleTrainingWon = 0; // optional int32 battle_training_won = 17
    private $battleTrainingTotal = 0; // optional int32 battle_training_total = 18
    private $prestigeRaisedTotal = 0; // optional int32 prestige_raised_total = 19
    private $prestigeDroppedTotal = 0; // optional int32 prestige_dropped_total = 20
    private $pokemonDeployed = 0; // optional int32 pokemon_deployed = 21
    private $pokemonCaughtByType = ""; // optional bytes pokemon_caught_by_type = 22
    private $smallRattataCaught = 0; // optional int32 small_rattata_caught = 23

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
          case 1: // optional int32 level = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->level = $tmp;

            break;
          case 2: // optional int64 experience = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->experience = $tmp;

            break;
          case 3: // optional int64 prev_level_xp = 3
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->prevLevelXp = $tmp;

            break;
          case 4: // optional int64 next_level_xp = 4
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->nextLevelXp = $tmp;

            break;
          case 5: // optional float km_walked = 5
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->kmWalked = $tmp;

            break;
          case 6: // optional int32 pokemons_encountered = 6
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->pokemonsEncountered = $tmp;

            break;
          case 7: // optional int32 unique_pokedex_entries = 7
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->uniquePokedexEntries = $tmp;

            break;
          case 8: // optional int32 pokemons_captured = 8
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->pokemonsCaptured = $tmp;

            break;
          case 9: // optional int32 evolutions = 9
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->evolutions = $tmp;

            break;
          case 10: // optional int32 poke_stop_visits = 10
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->pokeStopVisits = $tmp;

            break;
          case 11: // optional int32 pokeballs_thrown = 11
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->pokeballsThrown = $tmp;

            break;
          case 12: // optional int32 eggs_hatched = 12
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->eggsHatched = $tmp;

            break;
          case 13: // optional int32 big_magikarp_caught = 13
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->bigMagikarpCaught = $tmp;

            break;
          case 14: // optional int32 battle_attack_won = 14
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->battleAttackWon = $tmp;

            break;
          case 15: // optional int32 battle_attack_total = 15
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->battleAttackTotal = $tmp;

            break;
          case 16: // optional int32 battle_defended_won = 16
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->battleDefendedWon = $tmp;

            break;
          case 17: // optional int32 battle_training_won = 17
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->battleTrainingWon = $tmp;

            break;
          case 18: // optional int32 battle_training_total = 18
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->battleTrainingTotal = $tmp;

            break;
          case 19: // optional int32 prestige_raised_total = 19
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->prestigeRaisedTotal = $tmp;

            break;
          case 20: // optional int32 prestige_dropped_total = 20
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->prestigeDroppedTotal = $tmp;

            break;
          case 21: // optional int32 pokemon_deployed = 21
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->pokemonDeployed = $tmp;

            break;
          case 22: // optional bytes pokemon_caught_by_type = 22
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->pokemonCaughtByType = $tmp;

            break;
          case 23: // optional int32 small_rattata_caught = 23
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->smallRattataCaught = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->level !== 0) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->level);
      }
      if ($this->experience !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->experience);
      }
      if ($this->prevLevelXp !== 0) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $this->prevLevelXp);
      }
      if ($this->nextLevelXp !== 0) {
        fwrite($fp, " ", 1);
        Protobuf::write_varint($fp, $this->nextLevelXp);
      }
      if ($this->kmWalked !== 0) {
        fwrite($fp, "-", 1);
        Protobuf::write_float($fp, $this->kmWalked);
      }
      if ($this->pokemonsEncountered !== 0) {
        fwrite($fp, "0", 1);
        Protobuf::write_varint($fp, $this->pokemonsEncountered);
      }
      if ($this->uniquePokedexEntries !== 0) {
        fwrite($fp, "8", 1);
        Protobuf::write_varint($fp, $this->uniquePokedexEntries);
      }
      if ($this->pokemonsCaptured !== 0) {
        fwrite($fp, "@", 1);
        Protobuf::write_varint($fp, $this->pokemonsCaptured);
      }
      if ($this->evolutions !== 0) {
        fwrite($fp, "H", 1);
        Protobuf::write_varint($fp, $this->evolutions);
      }
      if ($this->pokeStopVisits !== 0) {
        fwrite($fp, "P", 1);
        Protobuf::write_varint($fp, $this->pokeStopVisits);
      }
      if ($this->pokeballsThrown !== 0) {
        fwrite($fp, "X", 1);
        Protobuf::write_varint($fp, $this->pokeballsThrown);
      }
      if ($this->eggsHatched !== 0) {
        fwrite($fp, "`", 1);
        Protobuf::write_varint($fp, $this->eggsHatched);
      }
      if ($this->bigMagikarpCaught !== 0) {
        fwrite($fp, "h", 1);
        Protobuf::write_varint($fp, $this->bigMagikarpCaught);
      }
      if ($this->battleAttackWon !== 0) {
        fwrite($fp, "p", 1);
        Protobuf::write_varint($fp, $this->battleAttackWon);
      }
      if ($this->battleAttackTotal !== 0) {
        fwrite($fp, "x", 1);
        Protobuf::write_varint($fp, $this->battleAttackTotal);
      }
      if ($this->battleDefendedWon !== 0) {
        fwrite($fp, "\x80\x01", 2);
        Protobuf::write_varint($fp, $this->battleDefendedWon);
      }
      if ($this->battleTrainingWon !== 0) {
        fwrite($fp, "\x88\x01", 2);
        Protobuf::write_varint($fp, $this->battleTrainingWon);
      }
      if ($this->battleTrainingTotal !== 0) {
        fwrite($fp, "\x90\x01", 2);
        Protobuf::write_varint($fp, $this->battleTrainingTotal);
      }
      if ($this->prestigeRaisedTotal !== 0) {
        fwrite($fp, "\x98\x01", 2);
        Protobuf::write_varint($fp, $this->prestigeRaisedTotal);
      }
      if ($this->prestigeDroppedTotal !== 0) {
        fwrite($fp, "\xa0\x01", 2);
        Protobuf::write_varint($fp, $this->prestigeDroppedTotal);
      }
      if ($this->pokemonDeployed !== 0) {
        fwrite($fp, "\xa8\x01", 2);
        Protobuf::write_varint($fp, $this->pokemonDeployed);
      }
      if ($this->pokemonCaughtByType !== "") {
        fwrite($fp, "\xb2\x01", 2);
        Protobuf::write_varint($fp, strlen($this->pokemonCaughtByType));
        fwrite($fp, $this->pokemonCaughtByType);
      }
      if ($this->smallRattataCaught !== 0) {
        fwrite($fp, "\xb8\x01", 2);
        Protobuf::write_varint($fp, $this->smallRattataCaught);
      }
    }

    public function size() {
      $size = 0;
      if ($this->level !== 0) {
        $size += 1 + Protobuf::size_varint($this->level);
      }
      if ($this->experience !== 0) {
        $size += 1 + Protobuf::size_varint($this->experience);
      }
      if ($this->prevLevelXp !== 0) {
        $size += 1 + Protobuf::size_varint($this->prevLevelXp);
      }
      if ($this->nextLevelXp !== 0) {
        $size += 1 + Protobuf::size_varint($this->nextLevelXp);
      }
      if ($this->kmWalked !== 0) {
        $size += 5;
      }
      if ($this->pokemonsEncountered !== 0) {
        $size += 1 + Protobuf::size_varint($this->pokemonsEncountered);
      }
      if ($this->uniquePokedexEntries !== 0) {
        $size += 1 + Protobuf::size_varint($this->uniquePokedexEntries);
      }
      if ($this->pokemonsCaptured !== 0) {
        $size += 1 + Protobuf::size_varint($this->pokemonsCaptured);
      }
      if ($this->evolutions !== 0) {
        $size += 1 + Protobuf::size_varint($this->evolutions);
      }
      if ($this->pokeStopVisits !== 0) {
        $size += 1 + Protobuf::size_varint($this->pokeStopVisits);
      }
      if ($this->pokeballsThrown !== 0) {
        $size += 1 + Protobuf::size_varint($this->pokeballsThrown);
      }
      if ($this->eggsHatched !== 0) {
        $size += 1 + Protobuf::size_varint($this->eggsHatched);
      }
      if ($this->bigMagikarpCaught !== 0) {
        $size += 1 + Protobuf::size_varint($this->bigMagikarpCaught);
      }
      if ($this->battleAttackWon !== 0) {
        $size += 1 + Protobuf::size_varint($this->battleAttackWon);
      }
      if ($this->battleAttackTotal !== 0) {
        $size += 1 + Protobuf::size_varint($this->battleAttackTotal);
      }
      if ($this->battleDefendedWon !== 0) {
        $size += 2 + Protobuf::size_varint($this->battleDefendedWon);
      }
      if ($this->battleTrainingWon !== 0) {
        $size += 2 + Protobuf::size_varint($this->battleTrainingWon);
      }
      if ($this->battleTrainingTotal !== 0) {
        $size += 2 + Protobuf::size_varint($this->battleTrainingTotal);
      }
      if ($this->prestigeRaisedTotal !== 0) {
        $size += 2 + Protobuf::size_varint($this->prestigeRaisedTotal);
      }
      if ($this->prestigeDroppedTotal !== 0) {
        $size += 2 + Protobuf::size_varint($this->prestigeDroppedTotal);
      }
      if ($this->pokemonDeployed !== 0) {
        $size += 2 + Protobuf::size_varint($this->pokemonDeployed);
      }
      if ($this->pokemonCaughtByType !== "") {
        $l = strlen($this->pokemonCaughtByType);
        $size += 2 + Protobuf::size_varint($l) + $l;
      }
      if ($this->smallRattataCaught !== 0) {
        $size += 2 + Protobuf::size_varint($this->smallRattataCaught);
      }
      return $size;
    }

    public function clearLevel() { $this->level = 0; }
    public function getLevel() { return $this->level;}
    public function setLevel($value) { $this->level = $value; }

    public function clearExperience() { $this->experience = 0; }
    public function getExperience() { return $this->experience;}
    public function setExperience($value) { $this->experience = $value; }

    public function clearPrevLevelXp() { $this->prevLevelXp = 0; }
    public function getPrevLevelXp() { return $this->prevLevelXp;}
    public function setPrevLevelXp($value) { $this->prevLevelXp = $value; }

    public function clearNextLevelXp() { $this->nextLevelXp = 0; }
    public function getNextLevelXp() { return $this->nextLevelXp;}
    public function setNextLevelXp($value) { $this->nextLevelXp = $value; }

    public function clearKmWalked() { $this->kmWalked = 0; }
    public function getKmWalked() { return $this->kmWalked;}
    public function setKmWalked($value) { $this->kmWalked = $value; }

    public function clearPokemonsEncountered() { $this->pokemonsEncountered = 0; }
    public function getPokemonsEncountered() { return $this->pokemonsEncountered;}
    public function setPokemonsEncountered($value) { $this->pokemonsEncountered = $value; }

    public function clearUniquePokedexEntries() { $this->uniquePokedexEntries = 0; }
    public function getUniquePokedexEntries() { return $this->uniquePokedexEntries;}
    public function setUniquePokedexEntries($value) { $this->uniquePokedexEntries = $value; }

    public function clearPokemonsCaptured() { $this->pokemonsCaptured = 0; }
    public function getPokemonsCaptured() { return $this->pokemonsCaptured;}
    public function setPokemonsCaptured($value) { $this->pokemonsCaptured = $value; }

    public function clearEvolutions() { $this->evolutions = 0; }
    public function getEvolutions() { return $this->evolutions;}
    public function setEvolutions($value) { $this->evolutions = $value; }

    public function clearPokeStopVisits() { $this->pokeStopVisits = 0; }
    public function getPokeStopVisits() { return $this->pokeStopVisits;}
    public function setPokeStopVisits($value) { $this->pokeStopVisits = $value; }

    public function clearPokeballsThrown() { $this->pokeballsThrown = 0; }
    public function getPokeballsThrown() { return $this->pokeballsThrown;}
    public function setPokeballsThrown($value) { $this->pokeballsThrown = $value; }

    public function clearEggsHatched() { $this->eggsHatched = 0; }
    public function getEggsHatched() { return $this->eggsHatched;}
    public function setEggsHatched($value) { $this->eggsHatched = $value; }

    public function clearBigMagikarpCaught() { $this->bigMagikarpCaught = 0; }
    public function getBigMagikarpCaught() { return $this->bigMagikarpCaught;}
    public function setBigMagikarpCaught($value) { $this->bigMagikarpCaught = $value; }

    public function clearBattleAttackWon() { $this->battleAttackWon = 0; }
    public function getBattleAttackWon() { return $this->battleAttackWon;}
    public function setBattleAttackWon($value) { $this->battleAttackWon = $value; }

    public function clearBattleAttackTotal() { $this->battleAttackTotal = 0; }
    public function getBattleAttackTotal() { return $this->battleAttackTotal;}
    public function setBattleAttackTotal($value) { $this->battleAttackTotal = $value; }

    public function clearBattleDefendedWon() { $this->battleDefendedWon = 0; }
    public function getBattleDefendedWon() { return $this->battleDefendedWon;}
    public function setBattleDefendedWon($value) { $this->battleDefendedWon = $value; }

    public function clearBattleTrainingWon() { $this->battleTrainingWon = 0; }
    public function getBattleTrainingWon() { return $this->battleTrainingWon;}
    public function setBattleTrainingWon($value) { $this->battleTrainingWon = $value; }

    public function clearBattleTrainingTotal() { $this->battleTrainingTotal = 0; }
    public function getBattleTrainingTotal() { return $this->battleTrainingTotal;}
    public function setBattleTrainingTotal($value) { $this->battleTrainingTotal = $value; }

    public function clearPrestigeRaisedTotal() { $this->prestigeRaisedTotal = 0; }
    public function getPrestigeRaisedTotal() { return $this->prestigeRaisedTotal;}
    public function setPrestigeRaisedTotal($value) { $this->prestigeRaisedTotal = $value; }

    public function clearPrestigeDroppedTotal() { $this->prestigeDroppedTotal = 0; }
    public function getPrestigeDroppedTotal() { return $this->prestigeDroppedTotal;}
    public function setPrestigeDroppedTotal($value) { $this->prestigeDroppedTotal = $value; }

    public function clearPokemonDeployed() { $this->pokemonDeployed = 0; }
    public function getPokemonDeployed() { return $this->pokemonDeployed;}
    public function setPokemonDeployed($value) { $this->pokemonDeployed = $value; }

    public function clearPokemonCaughtByType() { $this->pokemonCaughtByType = ""; }
    public function getPokemonCaughtByType() { return $this->pokemonCaughtByType;}
    public function setPokemonCaughtByType($value) { $this->pokemonCaughtByType = $value; }

    public function clearSmallRattataCaught() { $this->smallRattataCaught = 0; }
    public function getSmallRattataCaught() { return $this->smallRattataCaught;}
    public function setSmallRattataCaught($value) { $this->smallRattataCaught = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('level', $this->level, 0)
           . Protobuf::toString('experience', $this->experience, 0)
           . Protobuf::toString('prev_level_xp', $this->prevLevelXp, 0)
           . Protobuf::toString('next_level_xp', $this->nextLevelXp, 0)
           . Protobuf::toString('km_walked', $this->kmWalked, 0)
           . Protobuf::toString('pokemons_encountered', $this->pokemonsEncountered, 0)
           . Protobuf::toString('unique_pokedex_entries', $this->uniquePokedexEntries, 0)
           . Protobuf::toString('pokemons_captured', $this->pokemonsCaptured, 0)
           . Protobuf::toString('evolutions', $this->evolutions, 0)
           . Protobuf::toString('poke_stop_visits', $this->pokeStopVisits, 0)
           . Protobuf::toString('pokeballs_thrown', $this->pokeballsThrown, 0)
           . Protobuf::toString('eggs_hatched', $this->eggsHatched, 0)
           . Protobuf::toString('big_magikarp_caught', $this->bigMagikarpCaught, 0)
           . Protobuf::toString('battle_attack_won', $this->battleAttackWon, 0)
           . Protobuf::toString('battle_attack_total', $this->battleAttackTotal, 0)
           . Protobuf::toString('battle_defended_won', $this->battleDefendedWon, 0)
           . Protobuf::toString('battle_training_won', $this->battleTrainingWon, 0)
           . Protobuf::toString('battle_training_total', $this->battleTrainingTotal, 0)
           . Protobuf::toString('prestige_raised_total', $this->prestigeRaisedTotal, 0)
           . Protobuf::toString('prestige_dropped_total', $this->prestigeDroppedTotal, 0)
           . Protobuf::toString('pokemon_deployed', $this->pokemonDeployed, 0)
           . Protobuf::toString('pokemon_caught_by_type', $this->pokemonCaughtByType, "")
           . Protobuf::toString('small_rattata_caught', $this->smallRattataCaught, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Data.Player.PlayerStats)
  }

}