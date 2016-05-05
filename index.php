<?php 
    //ini_set('display_errors', true);
    include_once('simpletest/browser.php');
    $searchterm = 'wrinkles';
    $browser = new SimpleBrowser();
    $browser->get('https://www.adbeat.com/login');
    //login
    $browser->setField('email', 'milliondollaryear');
    $browser->setField('password', 'h!luck4');
    $browser->clickSubmitByName('login');
    
   $search_results2 = json_decode($browser->get("https://app.adbeat.com/api/adMetrics?numAdMetricDays=180&q={$searchterm}&queryField=creativeText&minAdImpact=1&minAdImpactRange=180&platformId=desktop&countryId=us&adTypeId=&adSizeId=&advertiserId=&publisherId=all&maxDestinationUrls=20&start=0&rows=25&sortBy=adMetric&sortOrder=desc"));
    
    echo "<ol>";
    for($i=0; $i < 3; $i++){
        echo "<li>{$search_results2->hits[$i]->advertiserId}</li>";
    }
    echo "</ol>";
