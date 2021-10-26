@extends('layouts.master')

@section('content')

<div class="player">
    <ul>
       <li class="cover"><img src="http://i1285.photobucket.com/albums/a583/TheGreatOzz1/Hosted-Images/Noisy-Freeks-Image_zps4kilrxml.png"/></li>
       <li class="info">
          <h1>The Noisy Freaks</h1>
          <h4>Premiere</h4>
          <h2>I Need You Back</h2>
 
          <div class="button-items">
             <audio id="music" preload="auto" loop="false">
                <source src="https://dl.dropbox.com/s/oswkgcw749xc8xs/The-Noisy-Freaks.mp3?dl=1" type="audio/mp3">
                   <source src="https://dl.dropbox.com/s/75jpngrgnavyu7f/The-Noisy-Freaks.ogg?dl=1" type="audio/ogg">
             </audio>
             <div id="slider"><div id="elapsed"></div></div>
             <p id="timer">0:00</p>
             <div class="controls">
                <span class="expend"><svg class="step-backward" viewBox="0 0 25 25" xml:space="preserve">
                   <g><polygon points="4.9,4.3 9,4.3 9,11.6 21.4,4.3 21.4,20.7 9,13.4 9,20.7 4.9,20.7"/></g>
                </svg></span>
 
                <svg id="play" viewBox="0 0 25 25" xml:space="preserve">
                    <defs><rect x="-49.5" y="-132.9" width="446.4" height="366.4"/></defs>
                   <g><circle fill="none" cx="12.5" cy="12.5" r="10.8"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,6.9V18c0,0,0.2,1.4,1.8,0l8.1-4.8c0,0,1.2-1.1-1-2L9.8,6.5 C9.8,6.5,9.1,6,8.7,6.9z"/>
                   </g>
                </svg>
               
 
                <svg id="pause" viewBox="0 0 25 25" xml:space="preserve">
                   <g>
                      <rect x="6" y="4.6" width="3.8" height="15.7"/>
                      <rect x="14" y="4.6" width="3.9" height="15.7"/>
                   </g>
                </svg>
 
                <span class="expend"><svg class="step-foreward" viewBox="0 0 25 25" xml:space="preserve">
                   <g><polygon points="20.7,4.3 16.6,4.3 16.6,11.6 4.3,4.3 4.3,20.7 16.7,13.4 16.6,20.7 20.7,20.7"/></g>
                 </svg></span>
             </div>
          </div>
       </li>
    </ul>
 </div>
 
 <p class="social"><a target="_blank" href="https://twitter.com/kirkbyo_" class="twitter">Twitter</a> | <a target="_blank" href="https://github.com/kirkbyo" class="github">Github</a></p>

 @endsection