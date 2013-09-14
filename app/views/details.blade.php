@extends('layouts.base')

@section('body')
    <script type="text/javascript">
    function toggle (show_target, hide_target1, hide_target2) {
        show_target_id = document.getElementById(show_target);
        show_target_id.style.display = "block";

        hide_target_id1 = document.getElementById(hide_target1);
        hide_target_id1.style.display = "none";
        
        hide_target_id2 = document.getElementById(hide_target2);
        hide_target_id2.style.display = "none";
    }
    </script>

    <div id="content" class="column-left">
        <div id="details">
            <h2>Details</h2>

            <div id="details_option">
                 <a href="javascript:toggle('event_information', 'directions', 'wedding_party')">Event Information</a> |
                 <a href="javascript:toggle('directions', 'event_information', 'wedding_party')">Directions</a> |
                 <a href="javascript:toggle('wedding_party', 'event_information', 'directions')">Wedding Party</a>
                 
            </div> 

            <div id="event_information" style="display: block;">
                <center>
                <table class="details">

                    <tr><th colspan="3">Event Details<br /></th></tr>

                    <tr><td class="line" colspan="3"><hr/></td></tr>

                    <tr><td><b>Date:</b></td><td width="10"></td><td>Saturday, March 31, 2012</td></tr>

                    <tr><td class="line" colspan="3"><hr/></td></tr>

                    <tr><td><b>Time:</b></td><td width="10"></td><td>5:30PM</td></tr>

                    <tr><td class="line" colspan="3"><hr/></td></tr>

                    <tr><td><b>Location:</b></td><td width="10"></td><td>Westlake Village Inn<br />
                            31943 Agoura Road, Westlake Village, CA<br />
                            (818) 889-0230<br />                                
                            <a href="http://www.westlakevillageinn.com" onclick="window.open(this.href);return false;">Website</a></td>
                            </tr>

                    <tr><td class="line" colspan="3"><hr/></td></tr>

                    <tr><td><b>Accomodations:</b></td><td width="10"></td>
                        <td>A block of rooms have been reserved at the following hotels:<br /><br />
                        
                        <b>Westlake Village Inn: </b> Accomodations available starting at $149 in the name of Mazawey-Hashem.<br /><br />

                        <b>Marriot Residence Inn:</b> Accomodations available starting at $104.<br /> (<a href="http://cwp.marriott.com/laxwv/mazaweyhashemwedding/">http://cwp.marriott.com/laxwv/mazaweyhashemwedding/</a>).<br /><br />
                        
                        <b>Hyatt Westlake Village:</b> Accomodations available starting at $120.<br /> (<a href="
https://resweb.passkey.com/go/MazaweyHashem">https://resweb.passkey.com/go/MazaweyHashem</a>).<br /><br />

                        We recommend booking as soon as possible as availability may be limited.
                        </td>
                    </tr>

                    <tr><td class="line" colspan="3"><hr/></td></tr>

                    <tr><td><b>Ceremony:</b></td><td width="10"></td><td>Tuscan Garden</td></tr>

                    <tr><td class="line" colspan="3"><hr/></td></tr>

                    <tr><td><b>Reception:</b></td><td width="10"></td><td>Provence Room</td></tr>

                    <tr><td class="line" colspan="3"><hr/></td></tr>

                    <tr><td><b>Attire:</b></td><td width="10"></td><td>Semi-Formal</td></tr>

                    <tr><td class="line" colspan="3"><hr/></td></tr>

                    <tr><td><b>Parking:</b></td><td width="10"></td><td>Complementary On Site</td></tr>

                    <tr><td class="line" colspan="3"><hr/></td></tr>

                    <tr><td><b>Officiant:</b></td><td width="10"></td><td><a href="http://www.jprweddings.com/">JP Reynolds</a></td></tr>
                
                    <tr><td class="line" colspan="3"><hr/></td></tr>

                    <tr><td><b>Coordinator:</b></td><td width="10"></td><td>Mary Sushinski, <a href="http://www.occasiontoremember.com/">Occasions</a></td></tr>

                </table>
                </center>
            </div>

            <div id="directions" style="display: none;">
                <div class="maps_col">
                    <img src="http://maps.google.com/maps/api/staticmap?center=31943%20Agoura%20Road%2C%20Westlake%20Village%2C%20CA&zoom=14&size=430x430&maptype=roadmap&markers=color:blue|label:|31943%20Agoura%20Road%2C%20Westlake%20Village%2C%20CA&sensor=false">
                </div>
                <div class="maps_col">
                    <p><b>Westlake Village Inn</b></p>
                    <p>31943 Agoura Road<br /> Westlake Village, CA<br />(818) 889-0230</p>

                    <p>
                        <b>Directions:</b><br />
                        <ul>
                            <li>
                                If traveling on 101 North, take exit 39<br />
                                for Lindero Canyon Road and turn left.
                            </li>
                            <li>
                                If traveling on 101 South, take exit 39<br />
                                for Lindero Canyon Road and turn right.
                            </li>
                            <li>
                                Turn right onto Agoura Road.
                            </li>
                            <li>
                                Westlake Village Inn will<br />
                                be on your right.
                            </li>
                        </ul>
                        <a href="http://maps.google.com/maps?q=31943+Agoura+Rd,+Westlake+Village,+CA+91361&hl=en&sll=34.149886,-118.803406&sspn=0.308558,0.54863&vpsrc=0&t=m&z=16">Google Maps Link</a>
                    </p>
                    
                </div>
            </div>

            <div id="wedding_party" style="display: none;">
                <div class="details_col">
                    <p>
                        <b>Parents of the Bride:</b><br />
                        <ul>
                            <li>Robert Mazawey</li>
                            <li>Rita Mazawey</li>
                        </ul>
                    </p>
                    <p>
                        <b>Parents of the Groom:</b><br />
                        <ul>
                            <li>Mohamed Hashem</li>
                            <li>Samia Hashem</li>
                        </ul>
                    </p>
                </div>

                <div class="details_col">
                    <p>
                        <b>Maids of Honor:</b><br />
                        <ul>
                            <li>Jennifer Mazawey</li>
                            <li>Juliet Mazawey</li>
                        </ul>
                    </p>
                    <p>
                        <b>Bridesmaids:</b><br />
                        <ul>
                            <li>Lindsay Cole</li>
                            <li>Monique Farah</li>
                            <li>Kyra Lucchesi</li>
                            <li>Amy Hashem</li>
                            <li>Laura Munoz</li>
                            <li>Meghan Musil</li>
                            <li>Tamra Nakagawa</li>
                            <li>Leah Peterson</li>
                            <li>NeChele Rucker</li>
                            <li>Christie Taylor</li>
                        </ul>
                    </p>                        
                </div>
                <div class="details_col">
                    <p>
                        <b>Best Men:</b><br />
                        <ul>
                            <li>David Botwin</li>
                            <li>Joseph Watkin</li>
                        </ul>
                    </p>
                    <p>
                        <b>Groomsmen:</b><br />
                        <ul>
                            <li>Samuel Barbour</li>
                            <li>Billy Beckerman</li>
                            <li>Weston Cookler</li>
                            <li>Juney Ham</li>
                            <li>Dr. Shaffer Mok</li>
                            <li>Dr. Tim Pirolli</li>
                            <li>Ga'ash Soffer</li>
                        </ul>
                    </p>
                </div> <!-- /details_col -->
            </div> <!-- /wedding_party -->
            
            <br /><br />
        </div> <!-- /details -->
    </div> <!-- /content -->
@stop
