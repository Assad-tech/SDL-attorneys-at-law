<?php

function getSiteSettings($type)
{
    // return \App\Models\SiteContent::first();
    return \App\Models\SiteContent::where('type', $type)->first();

}

function getSocialLinks($type){
    return \App\Models\SocialLink::where('type', $type)->first();
}
