<?php

class CandlestickPatterns
{
  public static $candlestick_patterns = array('bearishAbandonedBaby'            => 'Bearish Abandonded Baby Reversal',
                                              'bearishAdvanceBlock'             => 'Bearish Advance Block Reversal',
                                              'bearishBeltHold'                 => 'Bearish Belt Hold Reversal',
                                              'bearishBreakaway'                => 'Bearish Breakaway Reversal',
                                              'bearishDarkCloudCover'           => 'Bearish Dark Cloud Cover Reversal',
                                              'bearishDeliberation'             => 'Bearish Deliberation Reversal',
                                              'bearishDojiStar'                 => 'Bearish Doji Star Reversal',
                                              'bearishDownsideGapThreeMethods'  => 'Bearish Downside Gap 3 Methods Continuation',
                                              'bearishDownsideTasukiGap'        => 'Bearish Downside Tasuki Gap Continuation',
                                              'bearishEngulfing'                => 'Bearish Engulfing Reversal',
                                              'bearishEveningDojiStar'          => 'Bearish Evening Doji Star Reversal',
                                              'bearishEveningStar'              => 'Bearish Evening Star Reversal',
                                              'bearishFallingThreeMethods'      => 'Bearish Falling 3 Methods Continuation',
                                              'bearishHangingMan'               => 'Bearish Hanging Man Reversal',
                                              'bearishHarami'                   => 'Bearish Harami Reversal',
                                              'bearishHaramiCross'              => 'Bearish Harami Cross Reversal',
                                              'bearishIdenticalThreeCrows'      => 'Bearish Identical 3 Crows Reversal',
                                              'bearishInNeck'                   => 'Bearish In-Neck Continuation',
                                              'bearishKicking'                  => 'Bearish Kicking Reversal',
                                              'bearishMeetingLines'             => 'Bearish Meeting Lines Reversal',
                                              'bearishOnNeck'                   => 'Bearish On-Neck Continuation',
                                              'bearishSeparatingLines'          => 'Bearish Separating Lines Continuation',
                                              'bearishShootingStar'             => 'Bearish Shooting Star Reversal',
                                              'bearishSideBySideWhiteLines'     => 'Bearish Side-By-Side White Lines Continuation',
                                              'bearishThreeBlackCrows'          => 'Bearish 3 Black Crows Reversal',
                                              'bearishThreeInsideDown'          => 'Bearish 3 Inside Down Reversal',
                                              'bearishThreeLineStrike'          => 'Bearish 3-Line Strike Continuation',
                                              'bearishThreeOutsideDown'         => 'Bearish 3 Outside Down Reversal',
                                              'bearishThrusting'                => 'Bearish Thrusting Continuation',
                                              'bearishTriStar'                  => 'Bearish Tri-Star Reversal',
                                              'bearishTweezerTop'               => 'Bearish Tweezer Top Reversal',
                                              'bearishTwoCrows'                 => 'Bearish 2 Crows Reversal',
                                              'bearishUpsideGapTwoCrows'        => 'Bearish Upside Gap 2 Crows Reversal',
                                              'bullishAbandonedBaby'            => 'Bullish Abandonded Baby Reversal',
                                              'bullishBeltHold'                 => 'Bullish Belt Hold Reversal',
                                              'bullishBreakaway'                => 'Bullish Breakaway Reversal',
                                              'bullishConcealingBabySwallow'    => 'Bullish Concealing Baby Swallow Reversal',
                                              'bullishDojiStar'                 => 'Bullish Doji Star Reversal',
                                              'bullishEngulfing'                => 'Bullish Engulfing Reversal',
                                              'bullishHammer'                   => 'Bullish Hammer Reversal',
                                              'bullishHarami'                   => 'Bullish Harami Reversal',
                                              'bullishHaramiCross'              => 'Bullish Harami Cross Reversal',
                                              'bullishHomingPigeon'             => 'Bullish Homing Pigeon Reversal',
                                              'bullishInvertedHammer'           => 'Bullish Inverted Hammer Reversal',
                                              'bullishKicking'                  => 'Bullish Kicking Reversal',
                                              'bullishLadderBottom'             => 'Bullish Ladder Bottom Reversal',
                                              'bullishMatHold'                  => 'Bullish Mat Hold Continuation',
                                              'bullishMatchingLow'              => 'Bullish Matching Low Reversal',
                                              'bullishMeetingLines'             => 'Bullish Meeting Lines Reversal',
                                              'bullishMorningDojiStar'          => 'Bullish Morning Doji Star Reversal',
                                              'bullishMorningStar'              => 'Bullish Morning Star Reversal',
                                              'bullishPiercingLine'             => 'Bullish Piercing Line Reversal',
                                              'bullishRisingThreeMethods'       => 'Bullish Rising 3 Methods Continuation',
                                              'bullishSeparatingLines'          => 'Bullish Separating Lines Continuation',
                                              'bullishSideBySideWhiteLines'     => 'Bullish Side-By-Side White Lines Continuation',
                                              'bullishStickSandwich'            => 'Bullish Stick Sandwich Reversal',
                                              'bullishThreeInsideUp'            => 'Bullish 3 Inside Up Reversal',
                                              'bullishThreeLineStrike'          => 'Bullish 3-Line Strike Continuation',
                                              'bullishThreeOutsideUp'           => 'Bullish 3 Outside Up Reversal',
                                              'bullishThreeStarsInTheSouth'     => 'Bullish 3 Stars In The South Reversal',
                                              'bullishThreeWhiteSoldiers'       => 'Bullish 3 White Soldiers Reversal',
                                              'bullishTriStar'                  => 'Bullish Tri-Star Reversal',
                                              'bullishTweezerBottom'            => 'Bullish Tweezer Bottom Reversal',
                                              'bullishUniqueThreeRiverBottom'   => 'Bullish Unique 3 River Bottom Reversal',
                                              'bullishUpsideGapThreeMethods'    => 'Bullish Upside Gap 3 Methods Continuation',
                                              'bullishUpsideTasukiGap'          => 'Bullish Upside Tasuki Gap Continuation'
                                              );


  public static $candlestick_patterns_requiring_confirmation  = array('bearishAbandonedBaby'            => 'Watch for additional downside price action in the next few days.',
                                                                      'bearishDeliberation'             => 'Profit takers will quickly appear if the next day opens lower. Anticipate a Bearish Evening Star pattern.',
                                                                      'bearishDojiStar'                 => 'Profit takers will quickly appear if the next day opens lower. Anticipate a Bearish Evening Doji Star pattern.',
                                                                      'bearishDownsideGapThreeMethods'  => 'More investigation of the previous weeks is recommended in order to see if this is the first gap. If so, then this pattern is probably displaying short covering to "close the gap" created and the bearish trend should continue.',
                                                                      'bearishDownsideTasukiGap'        => 'More investigation of the previous weeks is recommended in order to see if this is the first gap. If so, then this pattern is probably displaying short covering to "close the gap" created and the bearish trend should continue.',
                                                                      'bearishEngulfing'                => 'Confirmed by the Bearish 3 Outside Down pattern.',
                                                                      'bearishEveningDojiStar'          => 'If the penetration of the 3rd day is more than 50 percent, then this formation has a much better chance to succeed for the trader.',
                                                                      'bearishEveningStar'          => 'If the penetration of the 3rd day is more than 50 percent, then this formation has a much better chance to succeed for the trader.',
                                                                      //'',

                                                                      'bullishSeparatingLines'          => 'The uptrend should resume.'
                                                                      );


  public function __construct() {
  }


  protected static function closeInPreviousBody($a, $b) {
    if (min($a['open'], $a['close']) < $b['close'] and max($a['open'], $a['close']) > $b['close']) {
      return true;
    }
    return false;
  }


  protected static function doji($a) {
    $body_size = max($a['open'], $a['close'])-min($a['open'], $a['close']);
    $upper_shadow = $a['high']-max($a['open'], $a['close']);
    $lower_shadow = min($a['open'], $a['close'])-$a['low'];
    if ($upper_shadow > $body_size and
        $lower_shadow > $body_size) {
      return true;
    }
    return false;
  }


  protected static function downCandle($a) {
    if ($a['open'] > $a['close']) {
      return true;
    }
    return false;
  }


  protected static function dragonflyDoji($a) {
    if ($a['open'] === $a['high'] and 
        $a['high'] === $a['close'] and 
        $a['close'] > $a['low']) {
      return true;
    }
    return false;
  }


  protected static function engulfing($a, $b) {
    if ($a['high'] <= max($b['open'], $b['close']) and
        $a['low'] >= min($b['open'], $b['close']) and 
        $a['open'] < max($b['open'], $b['close']) and
        $a['open'] > min($b['open'], $b['close']) and 
        $a['close'] < max($b['open'], $b['close']) and
        $a['close'] > min($b['open'], $b['close'])) {
      return true;
    }
    return false;
  }


  protected static function fullEngulfing($a, $b) {
    if ($a['high'] < max($b['open'], $b['close']) and
        $a['high'] > min($b['open'], $b['close']) and 
        $a['low'] < max($b['open'], $b['close']) and
        $a['low'] > min($b['open'], $b['close'])) {
      return true;
    }
    return false;  }


  protected static function gappedDown($a, $b) {
    if ($a['low'] > $b['high']) {
      return true;
    }
    return false;
  }


  protected static function gappedDownClose($a, $b) {
    if (min($a['open'], $a['close']) > $b['close']) {
      return true;
    }
    return false;
  }


  protected static function gappedDownOpen($a, $b) {
    if (min($a['open'], $a['close']) > $b['open']) {
      return true;
    }
    return false;
  }


  protected static function gappedUp($a, $b) {
    if ($a['high'] < $b['low']) {
      return true;
    }
    return false;
  }


  protected static function gappedUpClose($a, $b) {
    if (max($a['open'], $a['close']) < $b['close']) {
      return true;
    }
    return false;
  }


  protected static function gappedUpOpen($a, $b) {
    if (max($a['open'], $a['close']) < $b['open']) {
      return true;
    }
    return false;
  }


  protected static function hammer($a) {
    $upper_shadow = $a['high']-max($a['open'], $a['close']);
    $lower_shadow = min($a['open'], $a['close'])-$a['low'];
    $body = abs($a['open']-$a['close']);
    if ($a['high'] >= max($a['open'], $a['close']) and
        $upper_shadow < $body and
        $a['low'] < min($a['open'], $a['close']) and
        $body <= $lower_shadow) {
      return true;
    }
    return false; 
  }


  protected static function hangingMan($a) {
    return self::hammer($a);
  }


  protected static function harami($a, $b) {
    if ($b['high'] <= max($a['open'], $a['close']) and
        $b['low'] >=  min($a['open'], $a['close']) and
        $b['open'] < max($a['open'], $a['close']) and
        $b['open'] > min($a['open'], $a['close']) and 
        $b['close'] < max($a['open'], $a['close']) and
        $b['close'] > min($a['open'], $a['close'])) {
      return true;
    }
    return false;
  }


  protected static function higherClose($a, $b) {
    if ($b['close'] > $a['close']) {
      return true;
    }
    return false;
  }


  protected static function higherHighs($a, $b) {
    if ($b['high'] > $a['high']) {
      return true;
    }
    return false;
  }


  protected static function higherHighsHigherLows($a, $b) {
    if (self::higherHighs($a, $b)) {
      return self::higherLows($a, $b);
    }
    return false;
  }

  protected static function higherHighsLowerLows($a, $b) {
    if (self::higherHighs($a, $b)) {
      return self::lowerLows($a, $b);
    }
    return false;
  }


  protected static function higherLows($a, $b) {
    if ($b['low'] > $a['low']) {
      return true;
    }
    return false;
  }


  protected static function higherLowerShadowRatio($a, $b) {
    $body_a = max($a['open'], $a['close'])-min($a['open'], $a['close']);
    $body_b = max($b['open'], $b['close'])-min($b['open'], $b['close']);
    $lower_shadow_a = min($a['open'], $a['close'])-$a['low'];
    $lower_shadow_b = min($b['open'], $b['close'])-$b['low'];
    $ratio_a = $lower_shadow_a/$body_a;
    $ratio_b = $lower_shadow_b/$body_b;
    if ($ratio_b > $ratio_a) {
      return true;
    }
    return false;
  }


  protected static function higherUpperShadowRatio($a, $b) {
    $body_a = abs($a['open']-$a['close']);
    $body_b = abs($b['open']-$b['close']);
    $upper_shadow_a = $a['high']-max($a['open'],$a['close']);
    $upper_shadow_b = $b['high']-max($b['open'],$b['close']);
    $ratio_a = $upper_shadow_a/$body_a;
    $ratio_b = $upper_shadow_b/$body_b;
    if ($ratio_b > $ratio_a) {
      return true;
    }
    return false;
  }


  protected static function highInPreviousBody($a, $b) {
    if (min($a['open'], $a['close']) < $b['high'] and max($a['open'], $a['close']) > $b['high']) {
      return true;
    }
    return false;
  }


  protected static function longBody($a) {
    $body = abs($a['open']-$a['close']);
    $lower_shadow = min($a['open'],$a['close'])-$a['low'];
    $upper_shadow = $a['high']-max($a['open'],$a['close']);
    if ($body > $lower_shadow+$upper_shadow) {
      return true;
    }
    return false;
  }


  protected static function lowerClose($a, $b) {
    if ($b['close'] < $a['close']) {
      return true;
    }
    return false;
  }


  protected static function lowerHighs($a, $b) {
    if ($b['high'] < $a['high']) {
      return true;
    }
    return false;
  }


  protected static function lowerHighsHigherLows($a, $b) {
    if (self::lowerHighs($a, $b)) {
      return self::higherLows($a, $b);
    }
    return false;
  }


  protected static function lowerHighsLowerLows($a, $b) {
    if (self::lowerHighs($a, $b)) {
      return self::lowerLows($a, $b);
    }
    return false;
  }

  
  protected static function lowerLows($a, $b) {
    if ($b['low'] < $a['low']) {
      return true;
    }
    return false;
  }


  protected static function lowerShadowLong($a) {
    $body_size = max($a['open'], $a['close'])-min($a['open'], $a['close']);
    $lower_shadow_size = min($a['open'], $a['close'])-$a['low'];
    if ($body_size <= $lower_shadow_size) {
      return true;
    }
    return false;
  }


  protected static function lowInPreviousBody($a, $b) {
    if (min($a['open'], $a['close']) < $b['low'] and max($a['open'], $a['close']) > $b['low']) {
      return true;
    }
    return false;
  }


  protected static function marubozu($a) {
    if ($a['high'] === max($a['open'], $a['close']) and 
        $a['low'] === min($a['open'], $a['close'])) {
      return true;
    }
    else {
      $upper_shadow = $a['high']-max($a['open'], $a['close']);
      $lower_shadow = min($a['open'], $a['close'])-$a['low'];
      $body = max($a['open'], $a['close'])-min($a['open'], $a['close']);
      if ($body > 0 and $upper_shadow/$body <= 0.01 and $lower_shadow/$body <= 0.01) {
        return true;
      }
    }
    return false;
  }


  protected static function openInPreviousBody($a, $b) {
    if (min($a['open'], $a['close']) < $b['open'] and max($a['open'], $a['close']) > $b['open']) {
      return true;
    }
    return false;
  }


  protected static function shootingStar($a) {
    $body = max($a['open'], $a['close'])-min($a['open'], $a['close']);
    $lower_shadow = min($a['open'], $a['close'])-$a['low'];
    $upper_shadow = $a['high']-max($a['open'], $a['close']);
    if (!self::longBody($a) and
        $lower_shadow < $upper_shadow and
        $lower_shadow < $body and
        $body < $upper_shadow) {
      return true;
    }
    return false; 
  }


  protected static function upCandle($a) {
    if ($a['open'] < $a['close']) {
      return true;
    }
    return false;
  }


  protected static function upperShadowLong($a) {
    $body_size = max($a['open'], $a['close'])-min($a['open'], $a['close']);
    $upper_shadow_size = $a['high']-max($a['open'], $a['close']);
    if ($body_size <= $upper_shadow_size) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishAbandonedBaby($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      During an up trend.
      1st day is a up day.
      2nd day is a doji whose shadows gap above the 1st day's close.
      3rd day is a down day with no overlapping shadows.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and
      (self::doji($second_day) and self::gappedUp($first_day, $second_day)) and 
      (self::downCandle($third_day) and self::gappedDown($second_day, $third_day))
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishAdvanceBlock($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      During an up trend.
      Three consecutive up days with higher closes each day.
      Each day opens within the previous body.
      Each day displays deterioration of the upward move as shown with the long upper shadows on the 2nd and 3rd days.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and
      self::upCandle($second_day) and 
      self::openInPreviousBody($first_day, $second_day) and 
      self::higherClose($first_day, $second_day) and 
      self::higherUpperShadowRatio($first_day, $second_day) and
      self::upCandle($third_day) and
      self::openInPreviousBody($second_day, $third_day) and 
      self::higherClose($second_day, $third_day) and
      self::higherUpperShadowRatio($second_day, $third_day)
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Pattern 
   */
  public static function bearishBeltHold($history) {
    $last_day = $history['history'][count($history['history'])-1];
    $prev_one = $history['history'][count($history['history'])-2];
    $prev_two = $history['history'][count($history['history'])-3];

    /*
      During an up trend.
      Long down day where the open is equal to the high.
      No upper shadow.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $last_day)) and 
      self::gappedUp($prev_one, $last_day) and 
      !self::lowerShadowLong($last_day) and
      self::downCandle($last_day) and 
      ($last_day['open'] === $last_day['high'] and 
        $last_day['close'] > $last_day['low'])
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Pattern 
   */
  public static function bearishBreakaway($history) {
    $fifth_day  = $history['history'][count($history['history'])-1];
    $forth_day  = $history['history'][count($history['history'])-2];
    $third_day  = $history['history'][count($history['history'])-3];
    $second_day = $history['history'][count($history['history'])-4];
    $first_day  = $history['history'][count($history['history'])-5];
    $prev_one   = $history['history'][count($history['history'])-6];
    $prev_two   = $history['history'][count($history['history'])-7];

    /*
      During an up trend.
      1st day is a long up day.
      2nd day is a up day whose open gaps up.
      3rd & 4th days close higher each day.
      5th day is a long down day that closes inside the gap created by the 1st and 2nd days.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and 
      self::longBody($first_day) and 
      self::upCandle($second_day) and 
      self::gappedUp($first_day, $second_day) and
      self::higherClose($second_day, $third_day) and
      self::higherClose($third_day, $forth_day) and 
      self::downCandle($fifth_day) and
      self::longBody($fifth_day) and
      ($fifth_day['close'] < $second_day['low'] and $fifth_day['close'] > $first_day['high'])
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishDarkCloudCover($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];
    $first_day_middle = min($first_day['open'], $first_day['close'])+(abs($first_day['open']-$first_day['close'])/2);

    /*
      1st day is a long up day.
      2nd day is a down day which opens above the 1st day's high.
      2nd day closes within the 1st day, but below the midpoint.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::upCandle($first_day) and
      self::downCandle($second_day) and
      ($first_day['high'] < $second_day['open']) and
      self::closeInPreviousBody($first_day, $second_day) and
      ($second_day['close'] < $first_day_middle) 
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishDeliberation($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      Three consecutive up days (1st two long days) with higher opens and closes each day.
      3rd day gaps above the 2nd day's close. Some texts show the 3rd day as closing near the 2nd day. HotCandlestick.com diverges from this philosophy since any small body candlestick on the 3rd day shows weakness. Some might argue that the greater the gap above the 2nd day, the more likely a short term pullback is in order. Granted, a large gap may signal a continuation of the uptrend, but the opportunity to capitalize on a profit for an immediate pullback prior to the return of the uptrend should not be ignored. Stops should be in place when trading in order to minimize potential losses.
      3rd day is usually a spinning top or star (small body).
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and
      self::longBody($first_day) and
      self::upCandle($second_day) and 
      self::longBody($second_day) and
      ($first_day['open'] < $second_day['open'] and $first_day['close'] < $second_day['close']) and 
      self::gappedUpOpen($second_day, $third_day) and 
      self::gappedUpClose($second_day, $third_day) and 
      !self::longBody($third_day)
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishDojiStar($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      1st day is a long up day.
      2nd day is a doji day that gaps above the 1st day.
      The doji shadows shouldn't be excessively long.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and
      self::gappedUpOpen($first_day, $second_day) and
      self::gappedUpClose($first_day, $second_day) and
      ($first_day['close'] < $second_day['low']) and
      self::doji($second_day) and 
      !self::upperShadowLong($second_day) and 
      !self::lowerShadowLong($second_day)
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Continuation Pattern
   */
  public static function bearishDownsideGapThreeMethods($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      After a downtrend.
      1st two days are long down days with a gap btween them.
      3rd day is an up day that fills the gap of the 1st two days.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::lowerHighsLowerLows($prev_one, $first_day) and 
      self::longBody($first_day) and self::downCandle($first_day) and
      self::longBody($second_day) and self::downCandle($second_day) and
      self::gappedDown($first_day, $second_day) and
      self::upCandle($third_day) and
      self::openInPreviousBody($second_day, $third_day) and 
      self::openInPreviousBody($first_day, $third_day) 
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Continuation Pattern
   */
  public static function bearishDownsideTasukiGap($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      After an down trend.
      1st two days are long down days with a gap btween them.
      3rd day is an up day which opens within the body of the 2nd day and closes within the gap between the 1st and 2nd days.
      3rd day should not fully close the gap.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::lowerHighsLowerLows($prev_one, $first_day) and 
      self::downCandle($first_day) and
      self::longBody($first_day) and
      self::downCandle($second_day) and 
      self::longBody($second_day) and
      self::gappedDown($first_day, $second_day) and
      self::upCandle($third_day) and
      self::openInPreviousBody($second_day, $third_day) and
      ($second_day['high'] < $third_day['close'] and 
        $first_day['low'] > $third_day['close']) and
      ($first_day['close'] > $third_day['low'])
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Patterns
   */
  public static function bearishEngulfing($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      After an up trend.
      The direction of the 1st day's body reflects the trend, however could be a doji.
      The 2nd day's real body engulfs the 1st day's body in the opposite direction.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      (self::upCandle($first_day) or self::doji($first_day)) and
      self::engulfing($first_day, $second_day) and 
      self::downCandle($second_day)
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Patterns
   */
  public static function bearishEveningDojiStar($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      After an up trend.
      1st day is a long up day.
      2nd day is a doji which gaps above the 1st day's close.
      3rd day is a down day.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and
      self::gappedUpOpen($first_day, $second_day) and 
      self::doji($second_day) and
      self::downCandle($third_day) and 
      self::gappedDownOpen($second_day, $third_day)
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Patterns
   */
  public static function bearishEveningStar($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      After an up trend.
      1st day is a long up day.
      2nd day is a small body day which gaps above the 1st day's close.
      3rd day is a long down day.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and
      self::gappedUpOpen($first_day, $second_day) and 
      self::doji($second_day) and
      self::downCandle($third_day) and 
      self::gappedDownOpen($second_day, $third_day)
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Patterns
   */
  public static function bearishFallingThreeMethods($history) {
    $last_day   = $history['history'][count($history['history'])-1];
    $forth_day  = $history['history'][count($history['history'])-2];
    $third_day  = $history['history'][count($history['history'])-3];
    $second_day = $history['history'][count($history['history'])-4];
    $first_day  = $history['history'][count($history['history'])-5];
    $prev_one   = $history['history'][count($history['history'])-6];
    $prev_two   = $history['history'][count($history['history'])-7];

    /*
      1st day is a long down day.
      Three small body candlesticks follow the 1st day. Each trends upward and closes within the range of the 1st day.
      The last day is a down day which closes below the first day's close. 
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::lowerHighsLowerLows($prev_one, $first_day) and 
      self::downCandle($first_day) and
      (self::upCandle($second_day) and $second_day['open'] < $first_day['close'] and $second_day['close'] < $first_day['open']) and 
      ($third_day['high'] > $second_day['high'] and $third_day['low'] > $second_day['low'] and $third_day['high'] < $first_day['open']) and 
      (self::upCandle($forth_day) and self::higherHighsHigherLows($third_day, $forth_day) and $forth_day['high'] < $first_day['open']) and 
      (self::downCandle($last_day) and $last_day['close'] > $first_day['close'])
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishHangingMan($history) {
    $first_day  = $history['history'][count($history['history'])-1];
    $prev_one   = $history['history'][count($history['history'])-2];
    $prev_two   = $history['history'][count($history['history'])-3];
    $prev_three = $history['history'][count($history['history'])-4];

    /*
      Small real body at the upper trading range.
      Color of the body is not important.
      Long lower shadow at least twice the length of the body.
      Little or no upper shadow.
      Previous trend should be bullish.
     */
    if (
      (self::higherHighsHigherLows($prev_three, $prev_two) or self::higherLows($prev_three, $prev_one) or self::higherLows($prev_three, $first_day)) and
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::hangingMan($first_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishHarami($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      The 1st day is a long up day.
      The 2nd day is a short day whose body is engulfed by the 1st day's body.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::upCandle($first_day) and
      self::harami($first_day, $second_day) and
      self::downCandle($second_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishHaramiCross($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      The 1st day is a long up candle.
      The 2nd day is a doji whose body is engulfed by the 1st day's body.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::upCandle($first_day) and
      self::harami($first_day, $second_day) and
      self::doji($second_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishIdenticalThreeCrows($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      Three consecutive long down candles with lower closes each day.
      Each day opens at the previous day's close. 
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::downCandle($first_day) and
      self::downCandle($second_day) and $first_day['close'] === $second_day['open'] and 
      self::downCandle($third_day) and $second_day['close'] === $third_day['open'] 
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Continuation Pattern
   */
  public static function bearishInNeck($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];
    $first_day_lower_third = min($first_day['open'], $first_day['close'])+(abs($first_day['open']-$first_day['close'])/3);

    /*
      1st day is a long down candle.
      2nd day is a up candle which opens below the low of the 1st day.
      2nd day closes barely into the body of the 1st day.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::longBody($first_day) and 
      self::downCandle($first_day) and 
      self::upCandle($second_day) and 
      self::longBody($second_day) and 
      ($first_day['close'] > $second_day['open']) and
      ($first_day['close'] < $second_day['close']) and
      ($first_day_lower_third > $second_day['close'])
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishKicking($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];

    /*
      1st day is a up Marubozu.
      2nd day is a down Marubozu and gaps open below the 1st day's open.
     */
    if (
      self::upCandle($first_day) and 
      self::marubozu($first_day) and 
      self::downCandle($second_day) and
      self::marubozu($second_day) and
      self::gappedDown($first_day, $second_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishMeetingLines($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      1st day is a long up candle.
      2nd day is a long down candle and closes at the 1st day's close. 
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::upCandle($first_day) and 
      self::downCandle($second_day) and 
      $first_day['close'] === $second_day['close']
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Continuation Pattern
   */
  public static function bearishOnNeck($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      1st day is a long down candle.
      2nd day is a up candle which opens below and closes at the low of the 1st day.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and 
      self::longBody($first_day) and 
      self::upCandle($second_day) and 
      self::longBody($second_day) and 
      $first_day['low'] > $second_day['open'] and
      $first_day['low'] === $second_day['close']
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Continuation Pattern
   */
  public static function bearishSeparationLines($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      1st day is a long up candle.
      2nd day is a down candle that opens at the opening price of the 1st day.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::upCandle($first_day) and 
      self::downCandle($second_day) and 
      $first_day['open'] === $second_day['open']
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishShootingStar($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      Price gap open to the upside.
      Small real body formed near the bottom of the price range.
      The upper shadow at least twice as long as the body.
      The lower shadow is small or nonexistent.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::upCandle($first_day) and 
      self::gappedUpOpen($first_day, $second_day) and 
      self::shootingStar($second_day)
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bearish Continuation Pattern
   */
  public static function bearishSideBySideWhiteLines($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st day is a down candle.
      2nd day is a up candle which gaps below the 1st day's open.
      3rd day is a up candle about the same size as the 2nd day, opening at about the same price. 
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and 
      self::upCandle($second_day) and
      self::gappedDown($first_day, $second_day) and
      self::upCandle($third_day) and
      $second_day['open']-0.01 <= $third_day['open'] and $second_day['open']+0.01 >= $third_day['open'] and
      $second_day['close']-0.01 <= $third_day['close'] and $second_day['close']+0.01 >= $third_day['close']
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishThreeBlackCrows($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];
    $prev_three = $history['history'][count($history['history'])-6];

    /*
      Three consecutive large body down candles with lower closes each day.
      Each day opens within the body of the previous day.
     */
    if (
      (self::higherHighsHigherLows($prev_three, $prev_two) or self::higherLows($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_two, $prev_one) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::downCandle($first_day) and
      self::downCandle($second_day) and
      self::openInPreviousBody($first_day, $second_day) and 
      self::lowerClose($first_day, $second_day) and
      self::downCandle($third_day) and
      self::openInPreviousBody($second_day, $third_day) and
      self::lowerClose($second_day, $third_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishThreeInsideDown($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st two days form a bearish harami.
      3rd day closes lower than the 2nd day.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::harami($first_day, $second_day) and
      self::lowerClose($second_day, $third_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Continuation Pattern
   */
  public static function bearishThreeLineStrike($history) {
    $forth_day  = $history['history'][count($history['history'])-1];
    $third_day  = $history['history'][count($history['history'])-2];
    $second_day = $history['history'][count($history['history'])-3];
    $first_day  = $history['history'][count($history['history'])-4];
    $prev_one   = $history['history'][count($history['history'])-5];
    $prev_two   = $history['history'][count($history['history'])-6];

    /*
      1st three days make up the Three Black Crows formation.
      The last day is a up candle that opens below the 3rd day and closes above the 1st day's open.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and 
      self::lowerHighsLowerLows($prev_one, $first_day) and 
      self::downCandle($first_day) and
      self::downCandle($second_day) and
      self::openInPreviousBody($first_day, $second_day) and 
      self::lowerClose($first_day, $second_day) and
      self::downCandle($third_day) and
      self::openInPreviousBody($second_day, $third_day) and
      self::lowerClose($second_day, $third_day) and
      self::upCandle($forth_day) and
      $forth_day['open'] < $third_day['close'] and 
      $forth_day['close'] > $first_day['open']
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishThreeOutsideDown($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      Bearish Engulfing formation occurs making up the 1st two days.
      The 3rd day closes lower than the 2nd day.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      (self::upCandle($first_day) or self::doji($first_day)) and 
      self::engulfing($first_day, $second_day) and
      self::downCandle($second_day) and
      self::lowerClose($second_day, $third_day) and
      self::downCandle($third_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Continuation Pattern
   */
  public static function bearishThrusting($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];
    $first_day_middle = min($first_day['open'], $first_day['close'])+(abs($first_day['open']-$first_day['close'])/2);

    /*
      1st day is a down candle.
      2nd day is an up candle which opens well below the low of the 1st day.
      2nd day closes well into the body of the 1st day, but below the midpoint.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and
      self::upCandle($second_day) and
      self::longBody($second_day) and 
      $first_day['low'] > $second_day['open'] and 
      self::higherClose($first_day, $second_day) and
      $first_day_middle > $second_day['close']
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishTriStar($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      All three days are doji days.
      2nd day gaps above the 1st and 3rd days. 
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::doji($first_day) and 
      self::doji($second_day) and 
      self::doji($third_day) and 
      self::gappedUp($first_day, $second_day) and 
      self::gappedUp($third_day, $second_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishTweezerTop($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];
    $first_day_middle = min($first_day['open'], $first_day['close'])+(abs($first_day['open']-$first_day['close'])/2);

    /*
      1st day consists of a long up candle.
      2nd day consists of a short body candle that has a high equal to the prior day's high.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::marubozu($first_day) and
      ($first_day_middle < $second_day['low']) and
      ($first_day['high'] === $second_day['high'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bearish Reversal Pattern
   */
  public static function bearishTwoCrows($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st day is a long up candle.
      2nd day gaps up and is a down candle.
      3rd day is a down candle and opens inside the body of the 2nd day, then closes inside the body of the 1st day.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::upCandle($first_day) and
      self::downCandle($second_day) and
      self::gappedUp($first_day, $second_day) and 
      self::downCandle($third_day) and
      self::openInPreviousBody($second_day, $third_day) and 
      self::closeInPreviousBody($first_day, $third_day) 
      ){
      return true;
    }
    return false;
  }


  /*
   * A Bearish Reversal Pattern
   */
  public static function bearishUpsideGapTwoCrows($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st day is a long up candle.
      2nd day is a down candle and gaps above the 1st day.
      3rd day is a down candle  and opens above and engulfs the 2nd day.
      3rd day closes above the close of the 1st day.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::higherLows($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::upCandle($first_day) and
      self::downCandle($second_day) and 
      self::gappedUp($first_day, $second_day) and
      self::downCandle($third_day) and 
      self::engulfing($second_day, $third_day) and
      $first_day['close'] < $third_day['close']
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishAbandonedBaby($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      During a down trend.
      1st day is a down day.
      2nd day is a doji whose shadows gap below the 1st day's close.
      3rd day is a up day with no overlapping shadows.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and 
      self::lowerHighsLowerLows($prev_one, $first_day) and 
      ($first_day['close'] < $first_day['open']) and
      (abs($second_day['close']-$second_day['open']) < abs($second_day['high']-$second_day['low'])/2 and $first_day['low'] > $second_day['high']) and 
      ($third_day['close'] > $third_day['open'] and $third_day['low'] > $second_day['high'])
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishBeltHold($history) {
    $last_day = $history['history'][count($history['history'])-1];
    $prev_one = $history['history'][count($history['history'])-2];
    $prev_two = $history['history'][count($history['history'])-3];

    /*
      During a down trend.
      Long up day where the open is equal to the low.
      No lower shadow.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $last_day)) and 
      self::gappedDown($prev_one, $last_day) and 
      !self::upperShadowLong($last_day) and
      ($last_day['open'] < $last_day['close'] and 
        $last_day['open'] === $last_day['low'] and 
        $last_day['close'] < $last_day['high'])
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishBreakaway($history) {
    $fifth_day  = $history['history'][count($history['history'])-1];
    $forth_day  = $history['history'][count($history['history'])-2];
    $third_day  = $history['history'][count($history['history'])-3];
    $second_day = $history['history'][count($history['history'])-4];
    $first_day  = $history['history'][count($history['history'])-5];
    $prev_one   = $history['history'][count($history['history'])-6];
    $prev_two   = $history['history'][count($history['history'])-7];

    /*
      During a down trend.
      1st day is a long down day.
      2nd day is a down day whose open gaps down.
      3rd & 4th days close lower each day.
      5th day is a long up day that closes inside the gap created by the 1st and 2nd days.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and 
      self::lowerHighsLowerLows($prev_one, $first_day) and 
      self::downCandle($first_day) and 
      ($second_day['close'] < $second_day['open'] and $second_day['high'] < $first_day['low']) and
      ($third_day['high'] < $second_day['high'] and $third_day['low'] < $second_day['low']) and 
      ($forth_day['high'] < $third_day['high'] and $forth_day['low'] < $third_day['low']) and
      ($fifth_day['close'] > $fifth_day['open'] and $fifth_day['close'] > $second_day['high'] and $fifth_day['close'] < $first_day['low'])
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishConcealingBabySwallow($history) {
    $forth_day  = $history['history'][count($history['history'])-1];
    $third_day  = $history['history'][count($history['history'])-2];
    $second_day = $history['history'][count($history['history'])-3];
    $first_day  = $history['history'][count($history['history'])-4];
    $prev_one   = $history['history'][count($history['history'])-5];
    $prev_two   = $history['history'][count($history['history'])-6];

    /*
      1st two days are down candle Marubozu.
      3rd day is a down candle and opens with a gap down as well as a long upper shadow that trades into the body of the 2nd day.
      4th day is a down candle and completely engulfs the 3rd day.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and 
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::lowerHighsLowerLows($first_day, $second_day) and
      self::marubozu($first_day) and 
      self::downCandle($first_day) and 
      self::marubozu($second_day) and
      self::downCandle($second_day) and
      self::gappedDownOpen($third_day) and
      self::shootingStar($third_day) and 
      self::highInPreviousBody($second_day, $third_day) and 
      self::downCandle($forth_day) and
      self::fullEngulfing($third_day, $forth_day)
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishDojiStar($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      1st day is a long down day.
      2nd day is a doji day that gaps below the 1st day.
      The doji shadows shouldn't be excessively long.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and 
      self::lowerHighsLowerLows($prev_one, $first_day) and 
      self::downCandle($first_day) and
      self::gappedDown($first_day, $second_day) and
      self::doji($second_day)
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Reversal Patterns
   */
  public static function bullishEngulfing($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];
    $prev_three = $history['history'][count($history['history'])-5];

    /*
      After a down trend.
      The direction of the 1st day's body reflects the trend, however could be a doji.
      The 2nd day's real body engulfs the 1st day's body in the opposite direction.
     */
    if (
      (self::lowerHighsLowerLows($prev_three, $first_day) or 
      self::lowerHighsLowerLows($prev_two, $first_day) or 
      self::lowerHighsLowerLows($prev_one, $first_day)) and 
      (self::downCandle($first_day) or self::doji($first_day)) and
      self::engulfing($first_day, $second_day) and 
      self::upCandle($second_day)
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Reversal Patterns
   */
  public static function bullishHammer($history) {
    $first_day  = $history['history'][count($history['history'])-1];
    $prev_one   = $history['history'][count($history['history'])-2];
    $prev_two   = $history['history'][count($history['history'])-3];
    $prev_three = $history['history'][count($history['history'])-4];

    /*
      Small real body at the upper trading range.
      Color of the body is not important.
      Long lower shadow at least twice the length of the body.
      Little or no upper shadow.
      Previous trend should be bearish.
     */
    if (
      (self::lowerHighsLowerLows($prev_three, $first_day) or
      self::lowerHighsLowerLows($prev_two, $first_day) or 
      self::lowerHighsLowerLows($prev_one, $first_day)) and
      self::hammer($first_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishHarami($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      The 1st day is a long down day.
      The 2nd day is a short day whose body is engulfed by the 1st day's body.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $first_day) or 
      self::lowerHighsLowerLows($prev_one, $first_day)) and
      self::downCandle($first_day) and
      self::harami($first_day, $second_day) and
      self::upCandle($second_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishHaramiCross($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      The 1st day is a long down candle.
      The 2nd day is a doji whose body is engulfed by the 1st day's body.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $first_day) or
      self::lowerHighsLowerLows($prev_one, $first_day)) and
      self::downCandle($first_day) and
      self::harami($first_day, $second_day) and
      self::doji($second_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishHomingPigeon($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      The 1st day is a long down candle.
      The 2nd day is a short down candle whose body is engulfed by the 1st day's body.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and
      self::harami($first_day, $second_day) and
      self::downCandle($second_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishInvertedHammer($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      Small real body formed near the bottom of the price range.
      The upper shadow is no more than two times as long as the body.(Why?)
      The lower shadow is small or nonexistent.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and
      self::longBody($first_day) and
      self::upCandle($second_day) and
      self::gappedDownOpen($first_day, $second_day) and
      self::highInPreviousBody($first_day, $second_day) and
      !self::longBody($second_day) and 
      self::upperShadowLong($second_day) and
      !self::lowerShadowLong($second_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishKicking($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];

    /*
      1st day is a down Marubozu.
      2nd day is a up Marubozu and gaps open above the 1st day's open.
     */
    if (
      self::downCandle($first_day) and 
      self::marubozu($first_day) and 
      self::upCandle($second_day) and
      self::marubozu($second_day) and
      self::gappedUp($first_day, $second_day)
      ) {
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishLadderBottom($history) {
    $fifth_day  = $history['history'][count($history['history'])-1];
    $forth_day  = $history['history'][count($history['history'])-2];
    $third_day  = $history['history'][count($history['history'])-3];
    $second_day = $history['history'][count($history['history'])-4];
    $first_day  = $history['history'][count($history['history'])-5];
    $prev_one   = $history['history'][count($history['history'])-6];
    $prev_two   = $history['history'][count($history['history'])-7];
    $third_day_middle = min($third_day['open'], $third_day['close'])+(abs($third_day['open']-$third_day['close'])/2);

    /*
      1st three days are down candles with lower opens and closes.
      4th day is a down candle with upper shadow near previous open.
      5th day is an up candle and opens above previous close.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::lowerHighsLowerLows($first_day, $second_day) and
      self::lowerHighsLowerLows($second_day, $third_day) and
      self::downCandle($first_day) and
      self::downCandle($second_day) and
      self::downCandle($third_day) and
      self::shootingStar($forth_day) and
      ($third_day_middle < $forth_day['high'] and self::highInPreviousBody($second_day, $third_day)) and
      self::upCandle($fifth_day) and
      self::gappedUpOpen($forth_day, $fifth_day)
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Continuation Pattern
   */
  public static function bullishMatHold($history) {
    $last_day   = $history['history'][count($history['history'])-1];
    $forth_day  = $history['history'][count($history['history'])-2];
    $third_day  = $history['history'][count($history['history'])-3];
    $second_day = $history['history'][count($history['history'])-4];
    $first_day  = $history['history'][count($history['history'])-5];
    $prev_one   = $history['history'][count($history['history'])-6];
    $prev_two   = $history['history'][count($history['history'])-7];
    $first_day_middle = min($first_day['open'], $first_day['close'])+(abs($first_day['open']-$first_day['close'])/2);

    /*
      1st day is a long up day.
      2nd day is a down day that gaps above the 1st day.
      The next two days (3 & 4) are small body candles which trend lower and stay within the upper range of the 1st day.
      The last day is an up day which closes above the previous four day's range. 
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and
      self::downCandle($second_day) and 
      ($second_day['low'] > $first_day['high']) and 
      ($third_day['high'] < $second_day['high'] and $third_day['low'] < $second_day['low'] and $third_day['low'] > $first_day_middle) and 
      ($forth_day['close'] < $forth_day['open'] and
        $forth_day['high'] < $third_day['high'] and $forth_day['low'] < $third_day['low'] and $forth_day['low'] > $first_day_middle) and 
      ($last_day['close'] > $last_day['open'] and $last_day['close'] > $second_day['high'])
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishMatchingLow($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      1st day is a long down candle.
      2nd day is a down candle with a close equal to the 1st day.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and
      self::downCandle($second_day) and
      ($first_day['close'] === $second_day['close'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishMeetingLines($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      1st day is a long down candle.
      2nd day is a long up candle and closes at the close of the 1st day.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and
      self::longBody($first_day) and
      self::upCandle($second_day) and
      self::longBody($second_day) and
      ($first_day['close'] === $second_day['close'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishMorningDojiStar($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st day is a long down candle.
      2nd day is a doji which gaps below the first day's close.
      3rd day is a up candle.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and
      self::doji($second_day) and
      self::gappedDown($first_day, $second_day) and
      self::upCandle($third_day) and
      ($first_day['close'] < $third_day['close'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishMorningStar($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st day is a long down candle.
      2nd day gaps below the first day's close.
      3rd day is a up candle.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and
      self::doji($second_day) and
      ($second_day['open'] !== $second_day['close']) and 
      self::gappedDown($first_day, $second_day) and
      self::upCandle($third_day) and
      ($first_day['close'] < $third_day['close'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishPiercingLine($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];
    $first_day_middle = min($first_day['open'], $first_day['close'])+(abs($first_day['open']-$first_day['close'])/2);

    /*
      1st day is a long down candle.
      2nd day is an up candle which opens below the low of the 1st day.
      2nd day closes within, but above the midpoint of the 1st day's body.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::longBody($first_day) and
      self::downCandle($first_day) and
      self::upCandle($second_day) and
      self::gappedDownOpen($first_day, $second_day) and 
      self::closeInPreviousBody($first_day, $second_day) and 
      ($first_day_middle < $second_day['close'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Continuation Pattern
   */
  public static function bullishRisingThreeMethods($history) {
    $last_day   = $history['history'][count($history['history'])-1];
    $forth_day  = $history['history'][count($history['history'])-2];
    $third_day  = $history['history'][count($history['history'])-3];
    $second_day = $history['history'][count($history['history'])-4];
    $first_day  = $history['history'][count($history['history'])-5];
    $prev_one   = $history['history'][count($history['history'])-6];
    $prev_two   = $history['history'][count($history['history'])-7];

    /*
      1st day is a long up day.
      Three small body candlesticks follow the 1st day. Each trends downward and closes within the range of the 1st day.
      The last day is a up day which closes above the first day's close. 
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and
      (self::downCandle($second_day) and $second_day['open'] > $first_day['close'] and $second_day['close'] > $first_day['open']) and 
      ($third_day['high'] < $second_day['high'] and $third_day['low'] < $second_day['low'] and $third_day['low'] > $first_day['open']) and 
      (self::downCandle($forth_day) and self::lowerHighsLowerLows($third_day, $forth_day) and $forth_day['low'] > $first_day['open']) and 
      (self::upCandle($last_day) and $last_day['close'] > $first_day['close'])
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Continuation Pattern
   */
  public static function bullishSeparatingLines($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];

    /*
      After an uptrend.
      1st day is a long down day.
      2nd day is an up day that opens at the opening price of the 1st day.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::downCandle($first_day) and
      self::upCandle($second_day) and 
      $second_day['open'] == $first_day['open']
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Continuation Pattern
   */
  public static function bullishSideBySideWhiteLines($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      After an uptrend.
      1st two days are up days with an up gap between the 1st and 2nd day.
      3rd day is an up day about the same size as the 2nd day, opening at about the same price.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and
      self::upCandle($second_day) and
      self::gappedUp($first_day, $second_day) and
      self::upCandle($third_day) and
      $third_day['open'] >= ($second_day['open']-0.01) and $third_day['open'] <= ($second_day['open']+0.01) and
      $third_day['close'] >= ($second_day['close']-0.01) and $third_day['close'] <= ($second_day['close']+0.01)
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishStickSandwich($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st day is a down candle.
      2nd day is an up candle which trades above the close of the 1st day.
      3rd day is a down candle with a close equal to the 1st day.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and
      self::upCandle($second_day) and
      self::higherHighsHigherLows($first_day, $second_day) and
      self::openInPreviousBody($first_day, $second_day) and
      self::downCandle($third_day) and
      self::engulfing($second_day, $third_day) and
      ($first_day['close'] === $third_day['close'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishThreeInsideUp($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st two days form a bullish harami.
      3rd day closes higher than the 2nd day.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::harami($first_day, $second_day) and
      ($second_day['close'] < $third_day['close'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Continuation Pattern
   */
  public static function bullishThreeLineStrike($history) {
    $forth_day  = $history['history'][count($history['history'])-1];
    $third_day  = $history['history'][count($history['history'])-2];
    $second_day = $history['history'][count($history['history'])-3];
    $first_day  = $history['history'][count($history['history'])-4];
    $prev_one   = $history['history'][count($history['history'])-5];
    $prev_two   = $history['history'][count($history['history'])-6];

    /*
      After an uptrend.
      1st three days make up the Three White Soldiers formation. (3 up days)
      The last day is a down day that opens above the 3rd day and closes below the 1st day's open.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::upCandle($first_day) and
      self::upCandle($second_day) and 
      self::openInPreviousBody($first_day, $second_day) and
      self::higherClose($first_day, $second_day) and
      self::upCandle($third_day) and 
      self::openInPreviousBody($second_day, $third_day) and
      self::higherClose($second_day, $third_day) and
      self::downCandle($forth_day) and 
      ($forth_day['open'] > $third_day['close'] and $forth_day['close'] < $first_day['open']) 
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishThreeOutsideUp($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st two days form a bullish engulfing.
      3rd day closes higher than the 2nd day.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::engulfing($first_day, $second_day) and
      ($second_day['close'] < $third_day['close'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishThreeStarsInTheSouth($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st day is a down day with a long lower shadow.
      2nd day is a smaller version of the first day with a lower shadow above the 1st day's low.
      3rd day is a small down candle marubozu which opens and closes inside the 2nd day's high-low.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and 
      self::lowerShadowLong($first_day) and 
      self::downCandle($second_day) and
      self::lowerShadowLong($second_day) and
      self::lowerHighs($first_day, $second_day) and 
      self::higherLows($first_day, $second_day) and 
      self::downCandle($third_day) and
      self::marubozu($third_day) and
      self::lowerHighs($second_day, $third_day) and
      self::higherLows($second_day, $third_day)
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishThreeWhiteSoldiers($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      Three consecutive up candles with higher closes each day.
      Each day opens within the previous body.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::upCandle($first_day) and 
      self::upCandle($second_day) and
      self::openInPreviousBody($first_day, $second_day) and 
      self::higherClose($first_day, $second_day) and 
      self::upCandle($third_day) and
      self::openInPreviousBody($second_day, $third_day) and
      self::higherClose($second_day, $third_day)
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishTriStar($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      All three days are dojis.
      2nd day gaps below the 1st and 3rd.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::doji($first_day) and 
      self::doji($second_day) and
      self::doji($third_day) and
      self::gappedDown($first_day, $second_day) and
      self::gappedDown($third_day, $second_day)
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishTweezerBottom($history) {
    $second_day = $history['history'][count($history['history'])-1];
    $first_day  = $history['history'][count($history['history'])-2];
    $prev_one   = $history['history'][count($history['history'])-3];
    $prev_two   = $history['history'][count($history['history'])-4];
    $first_day_middle = min($first_day['open'], $first_day['close'])+(abs($first_day['open']-$first_day['close'])/2);

    /*
      1st day consists of a long down candle.
      2nd day consists of a short body candle that has a low equal to the prior day's low.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::marubozu($first_day) and 
      ($first_day_middle > $second_day['high']) and 
      ($first_day['low'] === $second_day['low'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Reversal Pattern
   */
  public static function bullishUniqueThreeRiverBottom($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      1st day is a long down candle.
      2nd day is a down candle harami body.
      2nd day's low sets a new low.
      3rd day is a short up candle which is below the 2nd day close.
     */
    if (
      (self::lowerHighsLowerLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::lowerHighsLowerLows($prev_one, $first_day) and
      self::downCandle($first_day) and 
      self::downCandle($second_day) and 
      self::harami($first_day, $second_day) and 
      self::lowerLows($first_day, $second_day) and
      self::upCandle($third_day) and
      self::higherLows($second_day, $third_day) and 
      ($second_day['close'] > $third_day['close'])
      ){
      return true;
    }
    return false;
  }


  /**
   * A Bullish Continuation Pattern
   */
  public static function bullishUpsideGapThreeMethods($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      After an up trend.
      1st two days are long up days with a gap btween them.
      3rd day is a down day that fills the gap of the 1st two days.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and 
      self::higherHighsHigherLows($prev_one, $first_day) and 
      self::higherHighsHigherLows($first_day, $second_day) and 
      self::longBody($first_day) and self::upCandle($first_day) and 
      self::longBody($second_day) and self::upCandle($second_day) and 
      self::gappedUp($first_day, $second_day) and
      self::downCandle($third_day) and 
      self::openInPreviousBody($second_day, $third_day) and 
      self::openInPreviousBody($first_day, $third_day)
      ) {
      return true;
    }

    return false;
  }


  /**
   * A Bullish Continuation Pattern
   */
  public static function bullishUpsideTasukiGap($history) {
    $third_day  = $history['history'][count($history['history'])-1];
    $second_day = $history['history'][count($history['history'])-2];
    $first_day  = $history['history'][count($history['history'])-3];
    $prev_one   = $history['history'][count($history['history'])-4];
    $prev_two   = $history['history'][count($history['history'])-5];

    /*
      After an up trend.
      1st two days are long up days with a gap btween them.
      3rd day is a down day which opens within the body of the 2nd day and closes within the gap between the 1st and 2nd days.
      3rd day should not fully close the gap.
     */
    if (
      (self::higherHighsHigherLows($prev_two, $prev_one) or self::lowerHighs($prev_two, $first_day)) and
      self::higherHighsHigherLows($prev_one, $first_day) and
      self::upCandle($first_day) and 
      self::longBody($first_day) and
      self::upCandle($second_day) and
      self::longBody($second_day) and 
      self::gappedUp($first_day, $second_day) and
      self::downCandle($third_day) and
      self::openInPreviousBody($second_day, $third_day) and
      ($second_day['low'] > $third_day['close'] and 
        $first_day['high'] < $third_day['close']) and
      ($first_day['close'] < $third_day['low'])
      ) {
      return true;
    }

    return false;
  }


  /**
   * Confirms the candlestick pattern
   */
  public static function confirmPattern($pattern, $last, $next) {
    if (substr($pattern, 0, 4) === 'bear' and
    (self::openInPreviousBody($last, $next) or $next['open'] < min($last['open'], $last['close'])) and 
    (self::closeInPreviousBody($last, $next) or $next['close'] < min($last['open'], $last['close']))) {
      return true;
    }
    else if (substr($pattern, 0, 4) === 'bull' and
    (self::openInPreviousBody($last, $next) or $next['open'] > max($last['open'], $last['close'])) and 
    (self::closeInPreviousBody($last, $next) or $next['close'] > max($last['open'], $last['close']))) {
      return true;
    }

    return false;
  }
}
