@extends('layouts.base')

@section('body')    
    <div id="content" class="column-left">
        <div id="registry">
            <h2>Registry</h2>

            <p>We are registered at the following locations.  Click on the image to visit our registry online!</p>
            
            <div class="location">
                <a href="http://www1.macys.com/registry/wedding/guest/?registryId=331263"><img src="images/app/macys.jpg"></a><br />
                Macy's
            </div>
            <div class="location">
               <a href="http://www.crateandbarrel.com/Gift-Registry/Guest/View-Registry.aspx?grid=4670379&SortBy=stillneeds"><img src="images/app/crateandbarrel.jpg"></a><br />
                Crate and Barrel
            </div>
            <div class="location">
               <a href="http://www.amazon.com/gp/registry/wedding/31GM55HC0UF5I"><img src="images/app/amazon.jpg"></a><br />
                Amazon.com
            </div>
            <div style="clear: both;"></div>

            <br /><br />
        </div>
    </div>
@stop