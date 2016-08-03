<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Enums/PokemonId.php');

namespace POGOProtos\Enums {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // enum POGOProtos.Enums.PokemonId
  abstract class PokemonId extends ProtobufEnum {
    const MISSINGNO = 0;
    const BULBASAUR = 1;
    const IVYSAUR = 2;
    const VENUSAUR = 3;
    const CHARMANDER = 4;
    const CHARMELEON = 5;
    const CHARIZARD = 6;
    const SQUIRTLE = 7;
    const WARTORTLE = 8;
    const BLASTOISE = 9;
    const CATERPIE = 10;
    const METAPOD = 11;
    const BUTTERFREE = 12;
    const WEEDLE = 13;
    const KAKUNA = 14;
    const BEEDRILL = 15;
    const PIDGEY = 16;
    const PIDGEOTTO = 17;
    const PIDGEOT = 18;
    const RATTATA = 19;
    const RATICATE = 20;
    const SPEAROW = 21;
    const FEAROW = 22;
    const EKANS = 23;
    const ARBOK = 24;
    const PIKACHU = 25;
    const RAICHU = 26;
    const SANDSHREW = 27;
    const SANDSLASH = 28;
    const NIDORAN_FEMALE = 29;
    const NIDORINA = 30;
    const NIDOQUEEN = 31;
    const NIDORAN_MALE = 32;
    const NIDORINO = 33;
    const NIDOKING = 34;
    const CLEFAIRY = 35;
    const CLEFABLE = 36;
    const VULPIX = 37;
    const NINETALES = 38;
    const JIGGLYPUFF = 39;
    const WIGGLYTUFF = 40;
    const ZUBAT = 41;
    const GOLBAT = 42;
    const ODDISH = 43;
    const GLOOM = 44;
    const VILEPLUME = 45;
    const PARAS = 46;
    const PARASECT = 47;
    const VENONAT = 48;
    const VENOMOTH = 49;
    const DIGLETT = 50;
    const DUGTRIO = 51;
    const MEOWTH = 52;
    const PERSIAN = 53;
    const PSYDUCK = 54;
    const GOLDUCK = 55;
    const MANKEY = 56;
    const PRIMEAPE = 57;
    const GROWLITHE = 58;
    const ARCANINE = 59;
    const POLIWAG = 60;
    const POLIWHIRL = 61;
    const POLIWRATH = 62;
    const ABRA = 63;
    const KADABRA = 64;
    const ALAKAZAM = 65;
    const MACHOP = 66;
    const MACHOKE = 67;
    const MACHAMP = 68;
    const BELLSPROUT = 69;
    const WEEPINBELL = 70;
    const VICTREEBEL = 71;
    const TENTACOOL = 72;
    const TENTACRUEL = 73;
    const GEODUDE = 74;
    const GRAVELER = 75;
    const GOLEM = 76;
    const PONYTA = 77;
    const RAPIDASH = 78;
    const SLOWPOKE = 79;
    const SLOWBRO = 80;
    const MAGNEMITE = 81;
    const MAGNETON = 82;
    const FARFETCHD = 83;
    const DODUO = 84;
    const DODRIO = 85;
    const SEEL = 86;
    const DEWGONG = 87;
    const GRIMER = 88;
    const MUK = 89;
    const SHELLDER = 90;
    const CLOYSTER = 91;
    const GASTLY = 92;
    const HAUNTER = 93;
    const GENGAR = 94;
    const ONIX = 95;
    const DROWZEE = 96;
    const HYPNO = 97;
    const KRABBY = 98;
    const KINGLER = 99;
    const VOLTORB = 100;
    const ELECTRODE = 101;
    const EXEGGCUTE = 102;
    const EXEGGUTOR = 103;
    const CUBONE = 104;
    const MAROWAK = 105;
    const HITMONLEE = 106;
    const HITMONCHAN = 107;
    const LICKITUNG = 108;
    const KOFFING = 109;
    const WEEZING = 110;
    const RHYHORN = 111;
    const RHYDON = 112;
    const CHANSEY = 113;
    const TANGELA = 114;
    const KANGASKHAN = 115;
    const HORSEA = 116;
    const SEADRA = 117;
    const GOLDEEN = 118;
    const SEAKING = 119;
    const STARYU = 120;
    const STARMIE = 121;
    const MR_MIME = 122;
    const SCYTHER = 123;
    const JYNX = 124;
    const ELECTABUZZ = 125;
    const MAGMAR = 126;
    const PINSIR = 127;
    const TAUROS = 128;
    const MAGIKARP = 129;
    const GYARADOS = 130;
    const LAPRAS = 131;
    const DITTO = 132;
    const EEVEE = 133;
    const VAPOREON = 134;
    const JOLTEON = 135;
    const FLAREON = 136;
    const PORYGON = 137;
    const OMANYTE = 138;
    const OMASTAR = 139;
    const KABUTO = 140;
    const KABUTOPS = 141;
    const AERODACTYL = 142;
    const SNORLAX = 143;
    const ARTICUNO = 144;
    const ZAPDOS = 145;
    const MOLTRES = 146;
    const DRATINI = 147;
    const DRAGONAIR = 148;
    const DRAGONITE = 149;
    const MEWTWO = 150;
    const MEW = 151;

    public static $_values = array(
      0 => "MISSINGNO",
      1 => "BULBASAUR",
      2 => "IVYSAUR",
      3 => "VENUSAUR",
      4 => "CHARMANDER",
      5 => "CHARMELEON",
      6 => "CHARIZARD",
      7 => "SQUIRTLE",
      8 => "WARTORTLE",
      9 => "BLASTOISE",
      10 => "CATERPIE",
      11 => "METAPOD",
      12 => "BUTTERFREE",
      13 => "WEEDLE",
      14 => "KAKUNA",
      15 => "BEEDRILL",
      16 => "PIDGEY",
      17 => "PIDGEOTTO",
      18 => "PIDGEOT",
      19 => "RATTATA",
      20 => "RATICATE",
      21 => "SPEAROW",
      22 => "FEAROW",
      23 => "EKANS",
      24 => "ARBOK",
      25 => "PIKACHU",
      26 => "RAICHU",
      27 => "SANDSHREW",
      28 => "SANDSLASH",
      29 => "NIDORAN_FEMALE",
      30 => "NIDORINA",
      31 => "NIDOQUEEN",
      32 => "NIDORAN_MALE",
      33 => "NIDORINO",
      34 => "NIDOKING",
      35 => "CLEFAIRY",
      36 => "CLEFABLE",
      37 => "VULPIX",
      38 => "NINETALES",
      39 => "JIGGLYPUFF",
      40 => "WIGGLYTUFF",
      41 => "ZUBAT",
      42 => "GOLBAT",
      43 => "ODDISH",
      44 => "GLOOM",
      45 => "VILEPLUME",
      46 => "PARAS",
      47 => "PARASECT",
      48 => "VENONAT",
      49 => "VENOMOTH",
      50 => "DIGLETT",
      51 => "DUGTRIO",
      52 => "MEOWTH",
      53 => "PERSIAN",
      54 => "PSYDUCK",
      55 => "GOLDUCK",
      56 => "MANKEY",
      57 => "PRIMEAPE",
      58 => "GROWLITHE",
      59 => "ARCANINE",
      60 => "POLIWAG",
      61 => "POLIWHIRL",
      62 => "POLIWRATH",
      63 => "ABRA",
      64 => "KADABRA",
      65 => "ALAKAZAM",
      66 => "MACHOP",
      67 => "MACHOKE",
      68 => "MACHAMP",
      69 => "BELLSPROUT",
      70 => "WEEPINBELL",
      71 => "VICTREEBEL",
      72 => "TENTACOOL",
      73 => "TENTACRUEL",
      74 => "GEODUDE",
      75 => "GRAVELER",
      76 => "GOLEM",
      77 => "PONYTA",
      78 => "RAPIDASH",
      79 => "SLOWPOKE",
      80 => "SLOWBRO",
      81 => "MAGNEMITE",
      82 => "MAGNETON",
      83 => "FARFETCHD",
      84 => "DODUO",
      85 => "DODRIO",
      86 => "SEEL",
      87 => "DEWGONG",
      88 => "GRIMER",
      89 => "MUK",
      90 => "SHELLDER",
      91 => "CLOYSTER",
      92 => "GASTLY",
      93 => "HAUNTER",
      94 => "GENGAR",
      95 => "ONIX",
      96 => "DROWZEE",
      97 => "HYPNO",
      98 => "KRABBY",
      99 => "KINGLER",
      100 => "VOLTORB",
      101 => "ELECTRODE",
      102 => "EXEGGCUTE",
      103 => "EXEGGUTOR",
      104 => "CUBONE",
      105 => "MAROWAK",
      106 => "HITMONLEE",
      107 => "HITMONCHAN",
      108 => "LICKITUNG",
      109 => "KOFFING",
      110 => "WEEZING",
      111 => "RHYHORN",
      112 => "RHYDON",
      113 => "CHANSEY",
      114 => "TANGELA",
      115 => "KANGASKHAN",
      116 => "HORSEA",
      117 => "SEADRA",
      118 => "GOLDEEN",
      119 => "SEAKING",
      120 => "STARYU",
      121 => "STARMIE",
      122 => "MR_MIME",
      123 => "SCYTHER",
      124 => "JYNX",
      125 => "ELECTABUZZ",
      126 => "MAGMAR",
      127 => "PINSIR",
      128 => "TAUROS",
      129 => "MAGIKARP",
      130 => "GYARADOS",
      131 => "LAPRAS",
      132 => "DITTO",
      133 => "EEVEE",
      134 => "VAPOREON",
      135 => "JOLTEON",
      136 => "FLAREON",
      137 => "PORYGON",
      138 => "OMANYTE",
      139 => "OMASTAR",
      140 => "KABUTO",
      141 => "KABUTOPS",
      142 => "AERODACTYL",
      143 => "SNORLAX",
      144 => "ARTICUNO",
      145 => "ZAPDOS",
      146 => "MOLTRES",
      147 => "DRATINI",
      148 => "DRAGONAIR",
      149 => "DRAGONITE",
      150 => "MEWTWO",
      151 => "MEW",
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