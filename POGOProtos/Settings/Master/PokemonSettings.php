<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/Master/PokemonSettings.php');

namespace POGOProtos\Settings\Master {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Settings.Master.PokemonSettings
  final class PokemonSettings extends ProtobufMessage {

    private $_unknown;
    private $pokemonId = \POGOProtos\Enums\PokemonId::MISSINGNO; // optional .POGOProtos.Enums.PokemonId pokemon_id = 1
    private $modelScale = 0; // optional float model_scale = 3
    private $type = \POGOProtos\Enums\PokemonType::POKEMON_TYPE_NONE; // optional .POGOProtos.Enums.PokemonType type = 4
    private $type2 = \POGOProtos\Enums\PokemonType::POKEMON_TYPE_NONE; // optional .POGOProtos.Enums.PokemonType type_2 = 5
    private $camera = null; // optional .POGOProtos.Settings.Master.Pokemon.CameraAttributes camera = 6
    private $encounter = null; // optional .POGOProtos.Settings.Master.Pokemon.EncounterAttributes encounter = 7
    private $stats = null; // optional .POGOProtos.Settings.Master.Pokemon.StatsAttributes stats = 8
    private $quickMoves = array(); // repeated .POGOProtos.Enums.PokemonMove quick_moves = 9
    private $cinematicMoves = array(); // repeated .POGOProtos.Enums.PokemonMove cinematic_moves = 10
    private $animationTime = array(); // repeated float animation_time = 11
    private $evolutionIds = array(); // repeated .POGOProtos.Enums.PokemonId evolution_ids = 12
    private $evolutionPips = 0; // optional int32 evolution_pips = 13
    private $rarity = \POGOProtos\Enums\PokemonRarity::NORMAL; // optional .POGOProtos.Enums.PokemonRarity rarity = 14
    private $pokedexHeightM = 0; // optional float pokedex_height_m = 15
    private $pokedexWeightKg = 0; // optional float pokedex_weight_kg = 16
    private $parentPokemonId = \POGOProtos\Enums\PokemonId::MISSINGNO; // optional .POGOProtos.Enums.PokemonId parent_pokemon_id = 17
    private $heightStdDev = 0; // optional float height_std_dev = 18
    private $weightStdDev = 0; // optional float weight_std_dev = 19
    private $kmDistanceToHatch = 0; // optional float km_distance_to_hatch = 20
    private $familyId = \POGOProtos\Enums\PokemonFamilyId::FAMILY_UNSET; // optional .POGOProtos.Enums.PokemonFamilyId family_id = 21
    private $candyToEvolve = 0; // optional int32 candy_to_evolve = 22

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
          case 1: // optional .POGOProtos.Enums.PokemonId pokemon_id = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->pokemonId = $tmp;

            break;
          case 3: // optional float model_scale = 3
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->modelScale = $tmp;

            break;
          case 4: // optional .POGOProtos.Enums.PokemonType type = 4
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->type = $tmp;

            break;
          case 5: // optional .POGOProtos.Enums.PokemonType type_2 = 5
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->type2 = $tmp;

            break;
          case 6: // optional .POGOProtos.Settings.Master.Pokemon.CameraAttributes camera = 6
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->camera = new \POGOProtos\Settings\Master\Pokemon\CameraAttributes($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Settings\Master\Pokemon\CameraAttributes did not read the full length');

            break;
          case 7: // optional .POGOProtos.Settings.Master.Pokemon.EncounterAttributes encounter = 7
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->encounter = new \POGOProtos\Settings\Master\Pokemon\EncounterAttributes($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Settings\Master\Pokemon\EncounterAttributes did not read the full length');

            break;
          case 8: // optional .POGOProtos.Settings.Master.Pokemon.StatsAttributes stats = 8
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->stats = new \POGOProtos\Settings\Master\Pokemon\StatsAttributes($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Settings\Master\Pokemon\StatsAttributes did not read the full length');

            break;
          case 9: // repeated .POGOProtos.Enums.PokemonMove quick_moves = 9
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              $this->quickMoves[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                $this->quickMoves[] = $tmp;
              }
            }

            break;
          case 10: // repeated .POGOProtos.Enums.PokemonMove cinematic_moves = 10
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              $this->cinematicMoves[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                $this->cinematicMoves[] = $tmp;
              }
            }

            break;
          case 11: // repeated float animation_time = 11
            if($wire !== 2 && $wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 5 got: $wire");
            }
            if ($wire === 5) {
              $tmp = Protobuf::read_float($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
              $this->animationTime[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_float($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
                $this->animationTime[] = $tmp;
              }
            }

            break;
          case 12: // repeated .POGOProtos.Enums.PokemonId evolution_ids = 12
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              $this->evolutionIds[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                $this->evolutionIds[] = $tmp;
              }
            }

            break;
          case 13: // optional int32 evolution_pips = 13
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->evolutionPips = $tmp;

            break;
          case 14: // optional .POGOProtos.Enums.PokemonRarity rarity = 14
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->rarity = $tmp;

            break;
          case 15: // optional float pokedex_height_m = 15
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->pokedexHeightM = $tmp;

            break;
          case 16: // optional float pokedex_weight_kg = 16
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->pokedexWeightKg = $tmp;

            break;
          case 17: // optional .POGOProtos.Enums.PokemonId parent_pokemon_id = 17
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->parentPokemonId = $tmp;

            break;
          case 18: // optional float height_std_dev = 18
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->heightStdDev = $tmp;

            break;
          case 19: // optional float weight_std_dev = 19
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->weightStdDev = $tmp;

            break;
          case 20: // optional float km_distance_to_hatch = 20
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->kmDistanceToHatch = $tmp;

            break;
          case 21: // optional .POGOProtos.Enums.PokemonFamilyId family_id = 21
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->familyId = $tmp;

            break;
          case 22: // optional int32 candy_to_evolve = 22
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->candyToEvolve = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->pokemonId !== \POGOProtos\Enums\PokemonId::MISSINGNO) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->pokemonId);
      }
      if ($this->modelScale !== 0) {
        fwrite($fp, "\x1d", 1);
        Protobuf::write_float($fp, $this->modelScale);
      }
      if ($this->type !== \POGOProtos\Enums\PokemonType::POKEMON_TYPE_NONE) {
        fwrite($fp, " ", 1);
        Protobuf::write_varint($fp, $this->type);
      }
      if ($this->type2 !== \POGOProtos\Enums\PokemonType::POKEMON_TYPE_NONE) {
        fwrite($fp, "(", 1);
        Protobuf::write_varint($fp, $this->type2);
      }
      if ($this->camera !== null) {
        fwrite($fp, "2", 1);
        Protobuf::write_varint($fp, $this->camera->size());
        $this->camera->write($fp);
      }
      if ($this->encounter !== null) {
        fwrite($fp, ":", 1);
        Protobuf::write_varint($fp, $this->encounter->size());
        $this->encounter->write($fp);
      }
      if ($this->stats !== null) {
        fwrite($fp, "B", 1);
        Protobuf::write_varint($fp, $this->stats->size());
        $this->stats->write($fp);
      }
      foreach($this->quickMoves as $v) {
        fwrite($fp, "H", 1);
        Protobuf::write_varint($fp, $v);
      }
      foreach($this->cinematicMoves as $v) {
        fwrite($fp, "P", 1);
        Protobuf::write_varint($fp, $v);
      }
      foreach($this->animationTime as $v) {
        fwrite($fp, "]", 1);
        Protobuf::write_float($fp, $v);
      }
      foreach($this->evolutionIds as $v) {
        fwrite($fp, "`", 1);
        Protobuf::write_varint($fp, $v);
      }
      if ($this->evolutionPips !== 0) {
        fwrite($fp, "h", 1);
        Protobuf::write_varint($fp, $this->evolutionPips);
      }
      if ($this->rarity !== \POGOProtos\Enums\PokemonRarity::NORMAL) {
        fwrite($fp, "p", 1);
        Protobuf::write_varint($fp, $this->rarity);
      }
      if ($this->pokedexHeightM !== 0) {
        fwrite($fp, "}", 1);
        Protobuf::write_float($fp, $this->pokedexHeightM);
      }
      if ($this->pokedexWeightKg !== 0) {
        fwrite($fp, "\x85\x01", 2);
        Protobuf::write_float($fp, $this->pokedexWeightKg);
      }
      if ($this->parentPokemonId !== \POGOProtos\Enums\PokemonId::MISSINGNO) {
        fwrite($fp, "\x88\x01", 2);
        Protobuf::write_varint($fp, $this->parentPokemonId);
      }
      if ($this->heightStdDev !== 0) {
        fwrite($fp, "\x95\x01", 2);
        Protobuf::write_float($fp, $this->heightStdDev);
      }
      if ($this->weightStdDev !== 0) {
        fwrite($fp, "\x9d\x01", 2);
        Protobuf::write_float($fp, $this->weightStdDev);
      }
      if ($this->kmDistanceToHatch !== 0) {
        fwrite($fp, "\xa5\x01", 2);
        Protobuf::write_float($fp, $this->kmDistanceToHatch);
      }
      if ($this->familyId !== \POGOProtos\Enums\PokemonFamilyId::FAMILY_UNSET) {
        fwrite($fp, "\xa8\x01", 2);
        Protobuf::write_varint($fp, $this->familyId);
      }
      if ($this->candyToEvolve !== 0) {
        fwrite($fp, "\xb0\x01", 2);
        Protobuf::write_varint($fp, $this->candyToEvolve);
      }
    }

    public function size() {
      $size = 0;
      if ($this->pokemonId !== \POGOProtos\Enums\PokemonId::MISSINGNO) {
        $size += 1 + Protobuf::size_varint($this->pokemonId);
      }
      if ($this->modelScale !== 0) {
        $size += 5;
      }
      if ($this->type !== \POGOProtos\Enums\PokemonType::POKEMON_TYPE_NONE) {
        $size += 1 + Protobuf::size_varint($this->type);
      }
      if ($this->type2 !== \POGOProtos\Enums\PokemonType::POKEMON_TYPE_NONE) {
        $size += 1 + Protobuf::size_varint($this->type2);
      }
      if ($this->camera !== null) {
        $l = $this->camera->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->encounter !== null) {
        $l = $this->encounter->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->stats !== null) {
        $l = $this->stats->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->quickMoves as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->cinematicMoves as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->animationTime as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->evolutionIds as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->evolutionPips !== 0) {
        $size += 1 + Protobuf::size_varint($this->evolutionPips);
      }
      if ($this->rarity !== \POGOProtos\Enums\PokemonRarity::NORMAL) {
        $size += 1 + Protobuf::size_varint($this->rarity);
      }
      if ($this->pokedexHeightM !== 0) {
        $size += 5;
      }
      if ($this->pokedexWeightKg !== 0) {
        $size += 6;
      }
      if ($this->parentPokemonId !== \POGOProtos\Enums\PokemonId::MISSINGNO) {
        $size += 2 + Protobuf::size_varint($this->parentPokemonId);
      }
      if ($this->heightStdDev !== 0) {
        $size += 6;
      }
      if ($this->weightStdDev !== 0) {
        $size += 6;
      }
      if ($this->kmDistanceToHatch !== 0) {
        $size += 6;
      }
      if ($this->familyId !== \POGOProtos\Enums\PokemonFamilyId::FAMILY_UNSET) {
        $size += 2 + Protobuf::size_varint($this->familyId);
      }
      if ($this->candyToEvolve !== 0) {
        $size += 2 + Protobuf::size_varint($this->candyToEvolve);
      }
      return $size;
    }

    public function clearPokemonId() { $this->pokemonId = \POGOProtos\Enums\PokemonId::MISSINGNO; }
    public function getPokemonId() { return $this->pokemonId;}
    public function setPokemonId($value) { $this->pokemonId = $value; }

    public function clearModelScale() { $this->modelScale = 0; }
    public function getModelScale() { return $this->modelScale;}
    public function setModelScale($value) { $this->modelScale = $value; }

    public function clearType() { $this->type = \POGOProtos\Enums\PokemonType::POKEMON_TYPE_NONE; }
    public function getType() { return $this->type;}
    public function setType($value) { $this->type = $value; }

    public function clearType2() { $this->type2 = \POGOProtos\Enums\PokemonType::POKEMON_TYPE_NONE; }
    public function getType2() { return $this->type2;}
    public function setType2($value) { $this->type2 = $value; }

    public function clearCamera() { $this->camera = null; }
    public function getCamera() { return $this->camera;}
    public function setCamera(\POGOProtos\Settings\Master\Pokemon\CameraAttributes $value) { $this->camera = $value; }

    public function clearEncounter() { $this->encounter = null; }
    public function getEncounter() { return $this->encounter;}
    public function setEncounter(\POGOProtos\Settings\Master\Pokemon\EncounterAttributes $value) { $this->encounter = $value; }

    public function clearStats() { $this->stats = null; }
    public function getStats() { return $this->stats;}
    public function setStats(\POGOProtos\Settings\Master\Pokemon\StatsAttributes $value) { $this->stats = $value; }

    public function clearQuickMoves() { $this->quickMoves = array(); }
    public function getQuickMovesCount() { return count($this->quickMoves); }
    public function getQuickMoves($index) { return $this->quickMoves[$index]; }
    public function getQuickMovesArray() { return $this->quickMoves; }
    public function setQuickMoves($index, array $value) {$this->quickMoves[$index] = $value; }
    public function addQuickMoves(array $value) { $this->quickMoves[] = $value; }
    public function addAllQuickMoves(array $values) { foreach($values as $value) {$this->quickMoves[] = $value; }}

    public function clearCinematicMoves() { $this->cinematicMoves = array(); }
    public function getCinematicMovesCount() { return count($this->cinematicMoves); }
    public function getCinematicMoves($index) { return $this->cinematicMoves[$index]; }
    public function getCinematicMovesArray() { return $this->cinematicMoves; }
    public function setCinematicMoves($index, array $value) {$this->cinematicMoves[$index] = $value; }
    public function addCinematicMoves(array $value) { $this->cinematicMoves[] = $value; }
    public function addAllCinematicMoves(array $values) { foreach($values as $value) {$this->cinematicMoves[] = $value; }}

    public function clearAnimationTime() { $this->animationTime = array(); }
    public function getAnimationTimeCount() { return count($this->animationTime); }
    public function getAnimationTime($index) { return $this->animationTime[$index]; }
    public function getAnimationTimeArray() { return $this->animationTime; }
    public function setAnimationTime($index, array $value) {$this->animationTime[$index] = $value; }
    public function addAnimationTime(array $value) { $this->animationTime[] = $value; }
    public function addAllAnimationTime(array $values) { foreach($values as $value) {$this->animationTime[] = $value; }}

    public function clearEvolutionIds() { $this->evolutionIds = array(); }
    public function getEvolutionIdsCount() { return count($this->evolutionIds); }
    public function getEvolutionIds($index) { return $this->evolutionIds[$index]; }
    public function getEvolutionIdsArray() { return $this->evolutionIds; }
    public function setEvolutionIds($index, array $value) {$this->evolutionIds[$index] = $value; }
    public function addEvolutionIds(array $value) { $this->evolutionIds[] = $value; }
    public function addAllEvolutionIds(array $values) { foreach($values as $value) {$this->evolutionIds[] = $value; }}

    public function clearEvolutionPips() { $this->evolutionPips = 0; }
    public function getEvolutionPips() { return $this->evolutionPips;}
    public function setEvolutionPips($value) { $this->evolutionPips = $value; }

    public function clearRarity() { $this->rarity = \POGOProtos\Enums\PokemonRarity::NORMAL; }
    public function getRarity() { return $this->rarity;}
    public function setRarity($value) { $this->rarity = $value; }

    public function clearPokedexHeightM() { $this->pokedexHeightM = 0; }
    public function getPokedexHeightM() { return $this->pokedexHeightM;}
    public function setPokedexHeightM($value) { $this->pokedexHeightM = $value; }

    public function clearPokedexWeightKg() { $this->pokedexWeightKg = 0; }
    public function getPokedexWeightKg() { return $this->pokedexWeightKg;}
    public function setPokedexWeightKg($value) { $this->pokedexWeightKg = $value; }

    public function clearParentPokemonId() { $this->parentPokemonId = \POGOProtos\Enums\PokemonId::MISSINGNO; }
    public function getParentPokemonId() { return $this->parentPokemonId;}
    public function setParentPokemonId($value) { $this->parentPokemonId = $value; }

    public function clearHeightStdDev() { $this->heightStdDev = 0; }
    public function getHeightStdDev() { return $this->heightStdDev;}
    public function setHeightStdDev($value) { $this->heightStdDev = $value; }

    public function clearWeightStdDev() { $this->weightStdDev = 0; }
    public function getWeightStdDev() { return $this->weightStdDev;}
    public function setWeightStdDev($value) { $this->weightStdDev = $value; }

    public function clearKmDistanceToHatch() { $this->kmDistanceToHatch = 0; }
    public function getKmDistanceToHatch() { return $this->kmDistanceToHatch;}
    public function setKmDistanceToHatch($value) { $this->kmDistanceToHatch = $value; }

    public function clearFamilyId() { $this->familyId = \POGOProtos\Enums\PokemonFamilyId::FAMILY_UNSET; }
    public function getFamilyId() { return $this->familyId;}
    public function setFamilyId($value) { $this->familyId = $value; }

    public function clearCandyToEvolve() { $this->candyToEvolve = 0; }
    public function getCandyToEvolve() { return $this->candyToEvolve;}
    public function setCandyToEvolve($value) { $this->candyToEvolve = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('pokemon_id', $this->pokemonId, \POGOProtos\Enums\PokemonId::MISSINGNO)
           . Protobuf::toString('model_scale', $this->modelScale, 0)
           . Protobuf::toString('type', $this->type, \POGOProtos\Enums\PokemonType::POKEMON_TYPE_NONE)
           . Protobuf::toString('type_2', $this->type2, \POGOProtos\Enums\PokemonType::POKEMON_TYPE_NONE)
           . Protobuf::toString('camera', $this->camera, null)
           . Protobuf::toString('encounter', $this->encounter, null)
           . Protobuf::toString('stats', $this->stats, null)
           . Protobuf::toString('quick_moves', $this->quickMoves, \POGOProtos\Enums\PokemonMove::MOVE_UNSET)
           . Protobuf::toString('cinematic_moves', $this->cinematicMoves, \POGOProtos\Enums\PokemonMove::MOVE_UNSET)
           . Protobuf::toString('animation_time', $this->animationTime, 0)
           . Protobuf::toString('evolution_ids', $this->evolutionIds, \POGOProtos\Enums\PokemonId::MISSINGNO)
           . Protobuf::toString('evolution_pips', $this->evolutionPips, 0)
           . Protobuf::toString('rarity', $this->rarity, \POGOProtos\Enums\PokemonRarity::NORMAL)
           . Protobuf::toString('pokedex_height_m', $this->pokedexHeightM, 0)
           . Protobuf::toString('pokedex_weight_kg', $this->pokedexWeightKg, 0)
           . Protobuf::toString('parent_pokemon_id', $this->parentPokemonId, \POGOProtos\Enums\PokemonId::MISSINGNO)
           . Protobuf::toString('height_std_dev', $this->heightStdDev, 0)
           . Protobuf::toString('weight_std_dev', $this->weightStdDev, 0)
           . Protobuf::toString('km_distance_to_hatch', $this->kmDistanceToHatch, 0)
           . Protobuf::toString('family_id', $this->familyId, \POGOProtos\Enums\PokemonFamilyId::FAMILY_UNSET)
           . Protobuf::toString('candy_to_evolve', $this->candyToEvolve, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.PokemonSettings)
  }

}