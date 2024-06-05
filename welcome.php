<html>
<head>
<style>
.wrapper {
	 position: absolute;
	 width: 280px;
	 height: 280px;
	 margin: auto;
	 top: calc(50% - 140px);
	 left: calc(50% - 140px);
}
 .drum {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
}
 .rim {
	 position: absolute;
	 width: 100%;
	 height: 100%;
}
 .rim div {
	 position: absolute;
	 left: -3px;
	 width: calc(100% + 6px);
	 height: 3px;
	 border-radius: 10px;
	 background: #c2b0a3;
}
 .rug {
	 position: absolute;
	 width: 100%;
	 height: 100%;
}
 .rug div {
	 position: absolute;
	 width: 5px;
	 height: 12px;
	 background: #c2b0a3;
}
 .rug div:before {
	 left: 2px;
	 width: 1px;
	 height: 12px;
	 background: #c2b0a3;
}
 .rug div.top:before {
	 top: -10px;
}
 .rug div.bottom:before {
	 bottom: -10px;
}
 .bass {
	 position: absolute;
	 top: 155px;
	 left: 65px;
	 width: 120px;
	 height: 120px;
}
 .bass .head {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 border-radius: 50%;
	 background: #e9dfd2;
	 border: 3px solid #c2b0a3;
	 -webkit-overflow: hidden;
	 -moz-overflow: hidden;
	 -ms-overflow: hidden;
	 -o-overflow: hidden;
	 overflow: hidden;
	 -webkit-box-sizing: border-box;
	 -moz-box-sizing: border-box;
	 -ms-box-sizing: border-box;
	 -o-box-sizing: border-box;
	 box-sizing: border-box;
	 -webkit-animation: bass 2s linear infinite;
	 -moz-animation: bass 2s linear infinite;
	 animation: bass 2s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .bass .head:before {
	 top: -85px;
	 left: -98px;
	 width: 206%;
	 height: 149%;
	 background: #f7ecdc;
	 border-radius: 50%;
	 -webkit-transform: rotate(55deg);
	 -moz-transform: rotate(55deg);
	 -ms-transform: rotate(55deg);
	 -o-transform: rotate(55deg);
	 transform: rotate(55deg);
}
 .bass span {
	 position: absolute;
	 display: block;
	 bottom: 4px;
	 width: 5px;
	 height: 10px;
	 background: #c2b0a3;
}
 .bass span:after {
	 top: 10px;
	 left: -1px;
	 width: 7px;
	 height: 12px;
	 background: #585552;
}
 .bass span:nth-of-type(1) {
	 left: 20px;
	 -webkit-transform: rotate(30deg);
	 -moz-transform: rotate(30deg);
	 -ms-transform: rotate(30deg);
	 -o-transform: rotate(30deg);
	 transform: rotate(30deg);
}
 .bass span:nth-of-type(2) {
	 right: 20px;
	 -webkit-transform: rotate(-30deg);
	 -moz-transform: rotate(-30deg);
	 -ms-transform: rotate(-30deg);
	 -o-transform: rotate(-30deg);
	 transform: rotate(-30deg);
}
 .floor {
	 position: absolute;
	 top: 152px;
	 left: 40px;
	 width: 52px;
	 height: 90px;
}
 .floor .tam {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background: #2e2d2b;
	 -webkit-box-sizing: border-box;
	 -moz-box-sizing: border-box;
	 -ms-box-sizing: border-box;
	 -o-box-sizing: border-box;
	 box-sizing: border-box;
	 -webkit-overflow: hidden;
	 -moz-overflow: hidden;
	 -ms-overflow: hidden;
	 -o-overflow: hidden;
	 overflow: hidden;
}
 .floor .tam:before {
	 top: -25px;
	 left: -2px;
	 width: 150%;
	 height: 122%;
	 background: #45413c;
	 border-radius: 50%;
}
 .floor .tam .rim div:nth-of-type(1) {
	 top: 0;
}
 .floor .tam .rim div:nth-of-type(2) {
	 bottom: 0;
}
 .floor .tam .rug div:nth-of-type(1) {
	 top: 10px;
	 left: 8px;
}
 .floor .tam .rug div:nth-of-type(2) {
	 top: 10px;
	 right: 8px;
}
 .floor .tam .rug div:nth-of-type(3) {
	 bottom: 10px;
	 left: 8px;
}
 .floor .tam .rug div:nth-of-type(4) {
	 bottom: 10px;
	 right: 8px;
}
 .floor span {
	 position: absolute;
	 display: block;
	 bottom: -30px;
	 width: 5px;
	 height: 54px;
	 background: #c2b0a3;
}
 .floor span:before {
	 top: 7px;
	 left: -2px;
	 width: 10px;
	 height: 12px;
	 background: #585552;
}
 .floor span:after {
	 top: 45px;
	 left: -1px;
	 width: 7px;
	 height: 19px;
	 background: #585552;
}
 .floor span:nth-of-type(1) {
	 left: -8px;
	 -webkit-transform: rotate(6deg);
	 -moz-transform: rotate(6deg);
	 -ms-transform: rotate(6deg);
	 -o-transform: rotate(6deg);
	 transform: rotate(6deg);
}
 .floor span:nth-of-type(2) {
	 right: -8px;
	 -webkit-transform: rotate(-6deg);
	 -moz-transform: rotate(-6deg);
	 -ms-transform: rotate(-6deg);
	 -o-transform: rotate(-6deg);
	 transform: rotate(-6deg);
}
 .snare {
	 position: absolute;
	 top: 145px;
	 left: 140px;
	 width: 60px;
	 height: 30px;
}
 .snare .tam {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background: #2e2d2b;
	 -webkit-transform: rotate(-9deg);
	 -moz-transform: rotate(-9deg);
	 -ms-transform: rotate(-9deg);
	 -o-transform: rotate(-9deg);
	 transform: rotate(-9deg);
	 -webkit-overflow: hidden;
	 -moz-overflow: hidden;
	 -ms-overflow: hidden;
	 -o-overflow: hidden;
	 overflow: hidden;
	 -webkit-box-sizing: border-box;
	 -moz-box-sizing: border-box;
	 -ms-box-sizing: border-box;
	 -o-box-sizing: border-box;
	 box-sizing: border-box;
	 -webkit-animation: snare 4s linear infinite;
	 -moz-animation: snare 4s linear infinite;
	 animation: snare 4s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .snare .tam:before {
	 top: -15px;
	 left: -35px;
	 width: 150%;
	 height: 122%;
	 background: #45413c;
	 border-radius: 50%;
}
 .snare .tam .rim div:nth-of-type(1) {
	 top: 0;
}
 .snare .tam .rim div:nth-of-type(2) {
	 bottom: 0;
}
 .snare .tam .rug div:nth-of-type(1) {
	 top: 10px;
	 left: 12px;
}
 .snare .tam .rug div:nth-of-type(2) {
	 top: 10px;
	 right: 12px;
}
 .snare .tam .rug div:nth-of-type(3) {
	 bottom: 10px;
	 left: 12px;
}
 .snare .tam .rug div:nth-of-type(4) {
	 bottom: 10px;
	 right: 12px;
}
 .snare span {
	 position: absolute;
	 display: block;
	 bottom: -109px;
	 width: 5px;
	 height: 45px;
	 background: #c2b0a3;
}
 .snare span:after {
	 top: 33px;
	 left: -1px;
	 width: 7px;
	 height: 13px;
	 background: #585552;
}
 .snare span:nth-of-type(1) {
	 left: 26px;
	 bottom: -109px;
	 width: 5px;
	 height: 110px;
	 -webkit-transform: rotate(0);
	 -moz-transform: rotate(0);
	 -ms-transform: rotate(0);
	 -o-transform: rotate(0);
	 transform: rotate(0);
}
 .snare span:nth-of-type(1):before {
	 top: 57px;
	 left: -3px;
	 width: 11px;
	 height: 8px;
	 background: #585552;
}
 .snare span:nth-of-type(1):after {
	 top: 98px;
}
 .snare span:nth-of-type(2) {
	 right: 19px;
	 -webkit-transform: rotate(-23deg);
	 -moz-transform: rotate(-23deg);
	 -ms-transform: rotate(-23deg);
	 -o-transform: rotate(-23deg);
	 transform: rotate(-23deg);
}
 .snare span:nth-of-type(3) {
	 left: 16px;
	 -webkit-transform: rotate(23deg);
	 -moz-transform: rotate(23deg);
	 -ms-transform: rotate(23deg);
	 -o-transform: rotate(23deg);
	 transform: rotate(23deg);
}
 .hightam {
	 position: absolute;
	 top: 114px;
	 left: 90px;
	 width: 45px;
	 height: 40px;
}
 .hightam .tam {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background: #2e2d2b;
	 -webkit-transform: rotate(14deg);
	 -moz-transform: rotate(14deg);
	 -ms-transform: rotate(14deg);
	 -o-transform: rotate(14deg);
	 transform: rotate(14deg);
	 -webkit-overflow: hidden;
	 -moz-overflow: hidden;
	 -ms-overflow: hidden;
	 -o-overflow: hidden;
	 overflow: hidden;
	 -webkit-box-sizing: border-box;
	 -moz-box-sizing: border-box;
	 -ms-box-sizing: border-box;
	 -o-box-sizing: border-box;
	 box-sizing: border-box;
	 -webkit-animation: hightam 4s linear infinite;
	 -moz-animation: hightam 4s linear infinite;
	 animation: hightam 4s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .hightam .tam:before {
	 top: -15px;
	 left: -35px;
	 width: 150%;
	 height: 122%;
	 background: #45413c;
	 border-radius: 50%;
}
 .hightam .tam .rim div:nth-of-type(1) {
	 top: 0;
}
 .hightam .tam .rim div:nth-of-type(2) {
	 bottom: 0;
}
 .hightam .tam .rug div:nth-of-type(1) {
	 top: 10px;
	 left: 8px;
}
 .hightam .tam .rug div:nth-of-type(2) {
	 top: 10px;
	 right: 8px;
}
 .hightam .tam .rug div:nth-of-type(3) {
	 bottom: 10px;
	 left: 8px;
}
 .hightam .tam .rug div:nth-of-type(4) {
	 bottom: 10px;
	 right: 8px;
}
 .hightam span {
	 position: absolute;
	 display: block;
	 top: 18px;
	 left: 26px;
	 width: 6px;
	 height: 25px;
	 background: #c2b0a3;
}
 .hightam span:before {
	 top: 0;
	 left: -5px;
	 width: 8px;
	 height: 5px;
	 background: #c2b0a3;
}
 .hightam span:after {
	 top: 33px;
	 left: -1px;
	 width: 7px;
	 height: 13px;
	 background: #585552;
}
 .cymbal {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 0;
	 height: 0;
	 border-bottom: 7px solid #ffd65d;
	 border-left: 40px solid transparent;
	 border-right: 40px solid transparent;
	 -webkit-transform-origin: top center;
	 -moz-transform-origin: top center;
	 -ms-transform-origin: top center;
	 -o-transform-origin: top center;
	 transform-origin: top center;
}
 .crash-cymbal {
	 position: absolute;
	 top: 75px;
	 left: -8px;
	 width: 75px;
	 height: 216px;
}
 .crash-cymbal .cymbal {
	 top: 15px;
	 -webkit-transform: rotate(27deg);
	 -moz-transform: rotate(27deg);
	 -ms-transform: rotate(27deg);
	 -o-transform: rotate(27deg);
	 transform: rotate(27deg);
	 -webkit-animation: crash-cymbal 2.5s linear infinite;
	 -moz-animation: crash-cymbal 2.5s linear infinite;
	 animation: crash-cymbal 2.5s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .crash-cymbal span {
	 position: absolute;
	 display: block;
	 top: 39px;
	 left: 18px;
	 width: 3px;
	 height: 127px;
	 background: #c2b0a3;
}
 .crash-cymbal span:nth-of-type(1) {
	 top: 12px;
	 left: 20px;
	 height: 23px;
	 -webkit-transform: rotate(40deg);
	 -moz-transform: rotate(40deg);
	 -ms-transform: rotate(40deg);
	 -o-transform: rotate(40deg);
	 transform: rotate(40deg);
	 -webkit-transform-origin: bottom center;
	 -moz-transform-origin: bottom center;
	 -ms-transform-origin: bottom center;
	 -o-transform-origin: bottom center;
	 transform-origin: bottom center;
}
 .crash-cymbal span:nth-of-type(1):after {
	 bottom: -5px;
	 left: -1px;
	 width: 5px;
	 height: 5px;
	 border-radius: 50%;
	 background: #585552;
}
 .crash-cymbal span:nth-of-type(2):before, .crash-cymbal span:nth-of-type(2):after {
	 top: 120px;
	 left: 0px;
	 width: 3px;
	 height: 50px;
	 background: #c2b0a3;
	 -webkit-transform-origin: top center;
	 -moz-transform-origin: top center;
	 -ms-transform-origin: top center;
	 -o-transform-origin: top center;
	 transform-origin: top center;
}
 .crash-cymbal span:nth-of-type(2):before {
	 -webkit-transform: rotate(25deg);
	 -moz-transform: rotate(25deg);
	 -ms-transform: rotate(25deg);
	 -o-transform: rotate(25deg);
	 transform: rotate(25deg);
}
 .crash-cymbal span:nth-of-type(2):after {
	 -webkit-transform: rotate(-20deg);
	 -moz-transform: rotate(-20deg);
	 -ms-transform: rotate(-20deg);
	 -o-transform: rotate(-20deg);
	 transform: rotate(-20deg);
}
 .hi-hat-cymbal {
	 position: absolute;
	 top: 110px;
	 right: 0px;
	 width: 80px;
	 height: 170px;
}
 .hi-hat-cymbal .cymbal {
	 top: 15px;
	 border-bottom: 5px solid #ffd65d;
}
 .hi-hat-cymbal .cymbal.top {
	 -webkit-animation: hi-hat-cymbal 1s linear infinite;
	 -moz-animation: hi-hat-cymbal 1s linear infinite;
	 animation: hi-hat-cymbal 1s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .hi-hat-cymbal .cymbal.bottom {
	 top: 30px;
	 border-bottom: none;
	 border-top: 5px solid #ffd65d;
}
 .hi-hat-cymbal span {
	 position: absolute;
	 display: block;
	 top: 4px;
	 right: 39px;
	 width: 3px;
	 height: 165px;
	 background: #c2b0a3;
}
 .hi-hat-cymbal span:before, .hi-hat-cymbal span:after {
	 top: 120px;
	 left: 0px;
	 width: 3px;
	 height: 50px;
	 background: #c2b0a3;
	 -webkit-transform-origin: top center;
	 -moz-transform-origin: top center;
	 -ms-transform-origin: top center;
	 -o-transform-origin: top center;
	 transform-origin: top center;
}
 .hi-hat-cymbal span:before {
	 -webkit-transform: rotate(25deg);
	 -moz-transform: rotate(25deg);
	 -ms-transform: rotate(25deg);
	 -o-transform: rotate(25deg);
	 transform: rotate(25deg);
}
 .hi-hat-cymbal span:after {
	 -webkit-transform: rotate(-20deg);
	 -moz-transform: rotate(-20deg);
	 -ms-transform: rotate(-20deg);
	 -o-transform: rotate(-20deg);
	 transform: rotate(-20deg);
}
 .stick {
	 position: absolute;
	 width: 2px;
	 height: 45px;
	 background: #a08561;
	 -webkit-transform-origin: top center;
	 -moz-transform-origin: top center;
	 -ms-transform-origin: top center;
	 -o-transform-origin: top center;
	 transform-origin: top center;
}
 .stick:before {
	 bottom: 64px;
	 width: 2px;
	 height: 10px;
	 background: #a08561;
}
 .human {
	 position: absolute;
	 top: 22px;
	 left: 130px;
	 width: 50px;
	 height: 270px;
	 -webkit-animation: body 1s linear infinite;
	 -moz-animation: body 1s linear infinite;
	 animation: body 1s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .human__head {
	 top: 0;
	 width: 50px;
	 height: 60px;
	 height: 60px;
}
 .human__face {
	 top: 11px;
	 left: 5px;
	 width: 40px;
	 height: 42px;
	 background: #e7c3aa;
	 border-radius: 0 0 50% 50%;
	 -webkit-transform-origin: bottom center;
	 -moz-transform-origin: bottom center;
	 -ms-transform-origin: bottom center;
	 -o-transform-origin: bottom center;
	 transform-origin: bottom center;
	 -webkit-animation: face 4s linear infinite;
	 -moz-animation: face 4s linear infinite;
	 animation: face 4s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .human__face span {
	 position: absolute;
	 top: 19px;
	 left: 12px;
	 width: 15px;
}
 .human__face span:before, .human__face span:after {
	 top: 0;
	 background: #2e2230;
	 width: 2px;
	 height: 2px;
}
 .human__face span:before {
	 left: 0;
}
 .human__face span:after {
	 right: 0;
}
 .human__hair {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 top: 2px;
	 left: 0;
}
 .human__hair > div {
	 border-radius: 50%;
}
 .human__hair > div:before, .human__hair > div:after {
	 height: 44px;
	 border-radius: 50%;
}
 .human__hair > div:nth-of-type(1) {
	 top: -7px;
	 left: -1px;
	 width: 41px;
	 height: 17px;
	 border-radius: 90% 90% 0 0;
	 background: #5c517b;
}
 .human__hair > div:nth-of-type(1):before {
	 top: -5px;
	 left: -3px;
	 width: 47px;
	 height: 48px;
}
 .human__hair > div:nth-of-type(1):after {
	 top: -20px;
	 left: 5px;
	 width: 32px;
	 height: 31px;
	 border-radius: 50%;
	 background: #5c517b;
	 -webkit-transform: rotate(-31deg);
	 -moz-transform: rotate(-31deg);
	 -ms-transform: rotate(-31deg);
	 -o-transform: rotate(-31deg);
	 transform: rotate(-31deg);
}
 .human__hair > div:nth-of-type(2) {
	 top: -7px;
	 left: -1px;
	 width: 41px;
	 height: 17px;
	 border-radius: 90% 90% 0 0;
}
 .human__hair > div:nth-of-type(2):before {
	 top: 18px;
	 right: -32px;
	 width: 51px;
	 border-top: 13px solid #5c517b;
	 -webkit-transform: rotate(79deg);
	 -moz-transform: rotate(79deg);
	 -ms-transform: rotate(79deg);
	 -o-transform: rotate(79deg);
	 transform: rotate(79deg);
}
 .human__hair > div:nth-of-type(2):after {
	 top: 18px;
	 left: -32px;
	 width: 51px;
	 border-top: 13px solid #5c517b;
	 -webkit-transform: rotate(-79deg);
	 -moz-transform: rotate(-79deg);
	 -ms-transform: rotate(-79deg);
	 -o-transform: rotate(-79deg);
	 transform: rotate(-79deg);
}
 .human__body {
	 top: 52px;
	 left: 0;
	 width: 50px;
	 height: 120px;
}
 .human__body > div:nth-of-type(1) {
	 top: 0;
	 left: 0;
	 width: 50px;
	 height: 80px;
	 background: #3f2a3a;
	 -webkit-transform-origin: top center;
	 -moz-transform-origin: top center;
	 -ms-transform-origin: top center;
	 -o-transform-origin: top center;
	 transform-origin: top center;
	 border-radius: 40% 40% 0 0;
}
 .human__body > div:nth-of-type(1) > div {
	 top: 70px;
	 left: 0;
	 width: 55px;
	 height: 20px;
	 background: #3f2a3a;
	 -webkit-transform: rotate(3deg);
	 -moz-transform: rotate(3deg);
	 -ms-transform: rotate(3deg);
	 -o-transform: rotate(3deg);
	 transform: rotate(3deg);
}
 .human__reg {
	 top: 88px;
	 width: 25px;
	 height: 175px;
	 -webkit-transform-origin: top center;
	 -moz-transform-origin: top center;
	 -ms-transform-origin: top center;
	 -o-transform-origin: top center;
	 transform-origin: top center;
}
 .human__reg > div {
	 top: 0;
	 left: 0;
	 width: 25px;
	 height: 25px;
	 background: #2e2230;
	 border-radius: 50%;
	 -webkit-transform-origin: center;
	 -moz-transform-origin: center;
	 -ms-transform-origin: center;
	 -o-transform-origin: center;
	 transform-origin: center;
}
 .human__reg > div:before {
	 top: 0;
	 left: 0;
	 width: 25px;
	 height: 70px;
	 background: #2e2230;
	 border-radius: 10px 10px 0 0;
}
 .human__reg > div > div {
	 top: 57.5px;
	 left: 0;
	 width: 25px;
	 height: 25px;
	 background: #2e2230;
	 border-radius: 50%;
	 -webkit-transform-origin: center;
	 -moz-transform-origin: center;
	 -ms-transform-origin: center;
	 -o-transform-origin: center;
	 transform-origin: center;
}
 .human__reg > div > div:before {
	 top: 65px;
	 left: 4px;
	 width: 12px;
	 height: 20px;
	 background: #642a75;
}
 .human__reg > div > div:after {
	 top: 12.5px;
	 left: 0;
	 width: 25px;
	 height: 55px;
	 background: #2e2230;
	 border-radius: 3px;
}
 .human__reg > div > div > div {
	 position: absolute;
	 top: 75px;
	 left: 2px;
	 width: 20px;
	 height: 20px;
	 background: #8f49a2;
}
 .human__reg > div > div > div:before, .human__reg > div > div > div:after {
	 width: 0;
	 height: 0;
	 border-bottom: 0px solid transparent;
}
 .human__reg--right {
	 right: -5px;
}
 .human__reg--right > div {
	 -webkit-transform: rotate(-72deg);
	 -moz-transform: rotate(-72deg);
	 -ms-transform: rotate(-72deg);
	 -o-transform: rotate(-72deg);
	 transform: rotate(-72deg);
	 -webkit-animation: reg_right1 1s linear infinite;
	 -moz-animation: reg_right1 1s linear infinite;
	 animation: reg_right1 1s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .human__reg--right > div > div {
	 -webkit-transform: rotate(84deg);
	 -moz-transform: rotate(84deg);
	 -ms-transform: rotate(84deg);
	 -o-transform: rotate(84deg);
	 transform: rotate(84deg);
	 -webkit-animation: reg_right2 1s linear infinite;
	 -moz-animation: reg_right2 1s linear infinite;
	 animation: reg_right2 1s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .human__reg--right > div > div > div {
	 top: 80px;
	 -webkit-transform: rotate(-11deg);
	 -moz-transform: rotate(-11deg);
	 -ms-transform: rotate(-11deg);
	 -o-transform: rotate(-11deg);
	 transform: rotate(-11deg);
}
 .human__reg--right > div > div > div:before {
	 top: 5px;
	 right: -19px;
	 border-left: 20px solid #8f49a2;
	 border-top: 15px solid transparent;
	 border-radius: 0 0 90% 0;
}
 .human__reg--right > div > div > div:after {
	 top: 0;
	 left: -4px;
	 border-right: 5px solid #8f49a2;
	 border-top: 20px solid transparent;
	 border-radius: 0 0 0 50%;
}
 .human__arm {
	 top: 2px;
	 width: 20px;
	 height: 120px;
	 -webkit-transform-origin: top center;
	 -moz-transform-origin: top center;
	 -ms-transform-origin: top center;
	 -o-transform-origin: top center;
	 transform-origin: top center;
}
 .human__arm > div {
	 top: 0;
	 left: 0;
	 width: 15px;
	 height: 15px;
	 background: #3f2a3a;
	 border-radius: 50%;
	 -webkit-transform-origin: center;
	 -moz-transform-origin: center;
	 -ms-transform-origin: center;
	 -o-transform-origin: center;
	 transform-origin: center;
	 -webkit-transform: rotate(25deg);
	 -moz-transform: rotate(25deg);
	 -ms-transform: rotate(25deg);
	 -o-transform: rotate(25deg);
	 transform: rotate(25deg);
}
 .human__arm > div:before {
	 top: 7.5px;
	 left: 0;
	 width: 15px;
	 height: 45px;
	 background: #3f2a3a;
}
 .human__arm > div:after {
	 top: 0;
	 right: -13px;
	 width: 0;
	 height: 0;
	 border-left: 15px solid #3f2a3a;
	 border-top: 0px solid transparent;
	 border-bottom: 45px solid transparent;
}
 .human__arm > div > div {
	 top: 45px;
	 left: 0;
	 width: 15px;
	 height: 15px;
	 background: #e7c3aa;
	 border-radius: 50%;
	 -webkit-transform-origin: center;
	 -moz-transform-origin: center;
	 -ms-transform-origin: center;
	 -o-transform-origin: center;
	 transform-origin: center;
	 -webkit-transform: rotate(-13deg);
	 -moz-transform: rotate(-13deg);
	 -ms-transform: rotate(-13deg);
	 -o-transform: rotate(-13deg);
	 transform: rotate(-13deg);
}
 .human__arm > div > div:after {
	 top: 7.5px;
	 left: 0;
	 width: 15px;
	 height: 35px;
	 background: #e7c3aa;
	 border-radius: 3px;
}
 .human__arm > div > div > div {
	 top: 35px;
	 left: -2px;
	 width: 20px;
	 height: 20px;
	 border-radius: 50%;
	 background: #e7c3aa;
}
 .human__arm > div > div > div:before {
	 top: 6px;
	 left: 7px;
	 width: 8px;
	 height: 9px;
	 border-radius: 50%;
	 background: #e7c3aa;
	 -webkit-transform: rotate(27deg);
	 -moz-transform: rotate(27deg);
	 -ms-transform: rotate(27deg);
	 -o-transform: rotate(27deg);
	 transform: rotate(27deg);
}
 .human__arm--left > div {
	 -webkit-transform: rotate(30deg);
	 -moz-transform: rotate(30deg);
	 -ms-transform: rotate(30deg);
	 -o-transform: rotate(30deg);
	 transform: rotate(30deg);
	 -webkit-animation: arm_left1 1s linear infinite;
	 -moz-animation: arm_left1 1s linear infinite;
	 animation: arm_left1 1s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .human__arm--left > div:after {
	 content: none;
}
 .human__arm--left > div > div {
	 -webkit-transform: rotate(-137deg);
	 -moz-transform: rotate(-137deg);
	 -ms-transform: rotate(-137deg);
	 -o-transform: rotate(-137deg);
	 transform: rotate(-137deg);
	 -webkit-animation: arm_left2 2.5s linear infinite;
	 -moz-animation: arm_left2 2.5s linear infinite;
	 animation: arm_left2 2.5s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .human__arm--left > div > div > div {
	 -webkit-animation: arm_left3 5s linear infinite;
	 -moz-animation: arm_left3 5s linear infinite;
	 animation: arm_left3 5s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
	 -webkit-transform: rotate(-8deg);
	 -moz-transform: rotate(-8deg);
	 -ms-transform: rotate(-8deg);
	 -o-transform: rotate(-8deg);
	 transform: rotate(-8deg);
}
 .human__arm--left > div > div > div .stick {
	 top: 20px;
	 left: 8px;
	 -webkit-transform: rotate(-9deg);
	 -moz-transform: rotate(-9deg);
	 -ms-transform: rotate(-9deg);
	 -o-transform: rotate(-9deg);
	 transform: rotate(-9deg);
}
 .human__arm--right {
	 right: -15px;
	 left: 33px;
}
 .human__arm--right > div {
	 -webkit-transform: rotate(-64deg);
	 -moz-transform: rotate(-64deg);
	 -ms-transform: rotate(-64deg);
	 -o-transform: rotate(-64deg);
	 transform: rotate(-64deg);
	 -webkit-animation: arm_right1 4s linear infinite;
	 -moz-animation: arm_right1 4s linear infinite;
	 animation: arm_right1 4s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .human__arm--right > div:after {
	 content: none;
}
 .human__arm--right > div > div {
	 -webkit-transform: rotate(84deg);
	 -moz-transform: rotate(84deg);
	 -ms-transform: rotate(84deg);
	 -o-transform: rotate(84deg);
	 transform: rotate(84deg);
	 -webkit-animation: arm_right2 4s linear infinite;
	 -moz-animation: arm_right2 4s linear infinite;
	 animation: arm_right2 4s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .human__arm--right > div > div > div {
	 -webkit-transform: rotate(-46deg);
	 -moz-transform: rotate(-46deg);
	 -ms-transform: rotate(-46deg);
	 -o-transform: rotate(-46deg);
	 transform: rotate(-46deg);
	 -webkit-animation: arm_right3 4s linear infinite;
	 -moz-animation: arm_right3 4s linear infinite;
	 animation: arm_right3 4s linear infinite;
	 -webkit-animation-fill-mode: both;
	 -moz-animation-fill-mode: both;
	 animation-fill-mode: both;
}
 .human__arm--right > div > div > div .stick {
	 top: 14px;
	 left: 0px;
	 -webkit-transform: rotate(70deg);
	 -moz-transform: rotate(70deg);
	 -ms-transform: rotate(70deg);
	 -o-transform: rotate(70deg);
	 transform: rotate(70deg);
}
 .human div {
	 position: absolute;
	 -webkit-box-sizing: border-box;
	 -moz-box-sizing: border-box;
	 -ms-box-sizing: border-box;
	 -o-box-sizing: border-box;
	 box-sizing: border-box;
}
 .human div:before, .human div:after {
	 -webkit-transform-origin: top center;
	 -moz-transform-origin: top center;
	 -ms-transform-origin: top center;
	 -o-transform-origin: top center;
	 transform-origin: top center;
	 -webkit-box-sizing: border-box;
	 -moz-box-sizing: border-box;
	 -ms-box-sizing: border-box;
	 -o-box-sizing: border-box;
	 box-sizing: border-box;
}
 @-webkit-keyframes bass {
	 0% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 10% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 15% {
		 -webkit-transform: scale(1.03);
		 -moz-transform: scale(1.03);
		 -ms-transform: scale(1.03);
		 -o-transform: scale(1.03);
		 transform: scale(1.03);
	}
	 20% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 50% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 55% {
		 -webkit-transform: scale(1.03);
		 -moz-transform: scale(1.03);
		 -ms-transform: scale(1.03);
		 -o-transform: scale(1.03);
		 transform: scale(1.03);
	}
	 60% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 65% {
		 -webkit-transform: scale(1.03);
		 -moz-transform: scale(1.03);
		 -ms-transform: scale(1.03);
		 -o-transform: scale(1.03);
		 transform: scale(1.03);
	}
	 70% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 100% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
}
 @-moz-keyframes bass {
	 0% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 10% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 15% {
		 -webkit-transform: scale(1.03);
		 -moz-transform: scale(1.03);
		 -ms-transform: scale(1.03);
		 -o-transform: scale(1.03);
		 transform: scale(1.03);
	}
	 20% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 50% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 55% {
		 -webkit-transform: scale(1.03);
		 -moz-transform: scale(1.03);
		 -ms-transform: scale(1.03);
		 -o-transform: scale(1.03);
		 transform: scale(1.03);
	}
	 60% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 65% {
		 -webkit-transform: scale(1.03);
		 -moz-transform: scale(1.03);
		 -ms-transform: scale(1.03);
		 -o-transform: scale(1.03);
		 transform: scale(1.03);
	}
	 70% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 100% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
}
 @keyframes bass {
	 0% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 10% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 15% {
		 -webkit-transform: scale(1.03);
		 -moz-transform: scale(1.03);
		 -ms-transform: scale(1.03);
		 -o-transform: scale(1.03);
		 transform: scale(1.03);
	}
	 20% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 50% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 55% {
		 -webkit-transform: scale(1.03);
		 -moz-transform: scale(1.03);
		 -ms-transform: scale(1.03);
		 -o-transform: scale(1.03);
		 transform: scale(1.03);
	}
	 60% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 65% {
		 -webkit-transform: scale(1.03);
		 -moz-transform: scale(1.03);
		 -ms-transform: scale(1.03);
		 -o-transform: scale(1.03);
		 transform: scale(1.03);
	}
	 70% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
	 100% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -ms-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
	}
}
 @-webkit-keyframes snare {
	 0% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 3% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 7% {
		 -webkit-transform: rotate(8deg);
		 -moz-transform: rotate(8deg);
		 -ms-transform: rotate(8deg);
		 -o-transform: rotate(8deg);
		 transform: rotate(8deg);
	}
	 10% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 13% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 23% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 27% {
		 -webkit-transform: rotate(8deg);
		 -moz-transform: rotate(8deg);
		 -ms-transform: rotate(8deg);
		 -o-transform: rotate(8deg);
		 transform: rotate(8deg);
	}
	 30% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 33% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 43% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 47% {
		 -webkit-transform: rotate(8deg);
		 -moz-transform: rotate(8deg);
		 -ms-transform: rotate(8deg);
		 -o-transform: rotate(8deg);
		 transform: rotate(8deg);
	}
	 50% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 53% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 100% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
}
 @-moz-keyframes snare {
	 0% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 3% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 7% {
		 -webkit-transform: rotate(8deg);
		 -moz-transform: rotate(8deg);
		 -ms-transform: rotate(8deg);
		 -o-transform: rotate(8deg);
		 transform: rotate(8deg);
	}
	 10% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 13% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 23% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 27% {
		 -webkit-transform: rotate(8deg);
		 -moz-transform: rotate(8deg);
		 -ms-transform: rotate(8deg);
		 -o-transform: rotate(8deg);
		 transform: rotate(8deg);
	}
	 30% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 33% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 43% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 47% {
		 -webkit-transform: rotate(8deg);
		 -moz-transform: rotate(8deg);
		 -ms-transform: rotate(8deg);
		 -o-transform: rotate(8deg);
		 transform: rotate(8deg);
	}
	 50% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 53% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 100% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
}
 @keyframes snare {
	 0% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 3% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 7% {
		 -webkit-transform: rotate(8deg);
		 -moz-transform: rotate(8deg);
		 -ms-transform: rotate(8deg);
		 -o-transform: rotate(8deg);
		 transform: rotate(8deg);
	}
	 10% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 13% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 23% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 27% {
		 -webkit-transform: rotate(8deg);
		 -moz-transform: rotate(8deg);
		 -ms-transform: rotate(8deg);
		 -o-transform: rotate(8deg);
		 transform: rotate(8deg);
	}
	 30% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 33% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 43% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 47% {
		 -webkit-transform: rotate(8deg);
		 -moz-transform: rotate(8deg);
		 -ms-transform: rotate(8deg);
		 -o-transform: rotate(8deg);
		 transform: rotate(8deg);
	}
	 50% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 53% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 100% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
}
 @-webkit-keyframes hightam {
	 0% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 62% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 65% {
		 -webkit-transform: rotate(10deg);
		 -moz-transform: rotate(10deg);
		 -ms-transform: rotate(10deg);
		 -o-transform: rotate(10deg);
		 transform: rotate(10deg);
	}
	 70% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 72% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 83% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 85% {
		 -webkit-transform: rotate(10deg);
		 -moz-transform: rotate(10deg);
		 -ms-transform: rotate(10deg);
		 -o-transform: rotate(10deg);
		 transform: rotate(10deg);
	}
	 90% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 92% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 100% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
}
 @-moz-keyframes hightam {
	 0% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 62% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 65% {
		 -webkit-transform: rotate(10deg);
		 -moz-transform: rotate(10deg);
		 -ms-transform: rotate(10deg);
		 -o-transform: rotate(10deg);
		 transform: rotate(10deg);
	}
	 70% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 72% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 83% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 85% {
		 -webkit-transform: rotate(10deg);
		 -moz-transform: rotate(10deg);
		 -ms-transform: rotate(10deg);
		 -o-transform: rotate(10deg);
		 transform: rotate(10deg);
	}
	 90% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 92% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 100% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
}
 @keyframes hightam {
	 0% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 62% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 65% {
		 -webkit-transform: rotate(10deg);
		 -moz-transform: rotate(10deg);
		 -ms-transform: rotate(10deg);
		 -o-transform: rotate(10deg);
		 transform: rotate(10deg);
	}
	 70% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 72% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 83% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 85% {
		 -webkit-transform: rotate(10deg);
		 -moz-transform: rotate(10deg);
		 -ms-transform: rotate(10deg);
		 -o-transform: rotate(10deg);
		 transform: rotate(10deg);
	}
	 90% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 92% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 100% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
}
 @-webkit-keyframes floor {
	 0% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 10% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 20% {
		 -webkit-transform: rotate(-3deg);
		 -moz-transform: rotate(-3deg);
		 -ms-transform: rotate(-3deg);
		 -o-transform: rotate(-3deg);
		 transform: rotate(-3deg);
	}
	 30% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 100% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
}
 @-moz-keyframes floor {
	 0% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 10% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 20% {
		 -webkit-transform: rotate(-3deg);
		 -moz-transform: rotate(-3deg);
		 -ms-transform: rotate(-3deg);
		 -o-transform: rotate(-3deg);
		 transform: rotate(-3deg);
	}
	 30% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 100% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
}
 @keyframes floor {
	 0% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 10% {
		 -webkit-transform: rotate(3deg);
		 -moz-transform: rotate(3deg);
		 -ms-transform: rotate(3deg);
		 -o-transform: rotate(3deg);
		 transform: rotate(3deg);
	}
	 20% {
		 -webkit-transform: rotate(-3deg);
		 -moz-transform: rotate(-3deg);
		 -ms-transform: rotate(-3deg);
		 -o-transform: rotate(-3deg);
		 transform: rotate(-3deg);
	}
	 30% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 100% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
}
 @-webkit-keyframes crash-cymbal {
	 0% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 15% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 20% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 35% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 40% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 55% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 60% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 75% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 80% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 95% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 100% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
}
 @-moz-keyframes crash-cymbal {
	 0% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 15% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 20% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 35% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 40% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 55% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 60% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 75% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 80% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 95% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 100% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
}
 @keyframes crash-cymbal {
	 0% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 15% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 20% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 35% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 40% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 55% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 60% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 75% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 80% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
	 95% {
		 -webkit-transform: rotate(6deg);
		 -moz-transform: rotate(6deg);
		 -ms-transform: rotate(6deg);
		 -o-transform: rotate(6deg);
		 transform: rotate(6deg);
	}
	 100% {
		 -webkit-transform: rotate(40deg);
		 -moz-transform: rotate(40deg);
		 -ms-transform: rotate(40deg);
		 -o-transform: rotate(40deg);
		 transform: rotate(40deg);
	}
}
 @-webkit-keyframes hi-hat-cymbal {
	 0% {
		 top: 15px;
	}
	 25% {
		 top: 25px;
	}
	 50% {
		 top: 15px;
	}
	 75% {
		 top: 25px;
	}
	 100% {
		 top: 15px;
	}
}
 @-moz-keyframes hi-hat-cymbal {
	 0% {
		 top: 15px;
	}
	 25% {
		 top: 25px;
	}
	 50% {
		 top: 15px;
	}
	 75% {
		 top: 25px;
	}
	 100% {
		 top: 15px;
	}
}
 @keyframes hi-hat-cymbal {
	 0% {
		 top: 15px;
	}
	 25% {
		 top: 25px;
	}
	 50% {
		 top: 15px;
	}
	 75% {
		 top: 25px;
	}
	 100% {
		 top: 15px;
	}
}
 @-webkit-keyframes reg_right1 {
	 0% {
		 -webkit-transform: rotate(-80deg);
		 -moz-transform: rotate(-80deg);
		 -ms-transform: rotate(-80deg);
		 -o-transform: rotate(-80deg);
		 transform: rotate(-80deg);
	}
	 25% {
		 -webkit-transform: rotate(-70deg);
		 -moz-transform: rotate(-70deg);
		 -ms-transform: rotate(-70deg);
		 -o-transform: rotate(-70deg);
		 transform: rotate(-70deg);
	}
	 50% {
		 -webkit-transform: rotate(-80deg);
		 -moz-transform: rotate(-80deg);
		 -ms-transform: rotate(-80deg);
		 -o-transform: rotate(-80deg);
		 transform: rotate(-80deg);
	}
	 75% {
		 -webkit-transform: rotate(-70deg);
		 -moz-transform: rotate(-70deg);
		 -ms-transform: rotate(-70deg);
		 -o-transform: rotate(-70deg);
		 transform: rotate(-70deg);
	}
	 100% {
		 -webkit-transform: rotate(-80deg);
		 -moz-transform: rotate(-80deg);
		 -ms-transform: rotate(-80deg);
		 -o-transform: rotate(-80deg);
		 transform: rotate(-80deg);
	}
}
 @-moz-keyframes reg_right1 {
	 0% {
		 -webkit-transform: rotate(-80deg);
		 -moz-transform: rotate(-80deg);
		 -ms-transform: rotate(-80deg);
		 -o-transform: rotate(-80deg);
		 transform: rotate(-80deg);
	}
	 25% {
		 -webkit-transform: rotate(-70deg);
		 -moz-transform: rotate(-70deg);
		 -ms-transform: rotate(-70deg);
		 -o-transform: rotate(-70deg);
		 transform: rotate(-70deg);
	}
	 50% {
		 -webkit-transform: rotate(-80deg);
		 -moz-transform: rotate(-80deg);
		 -ms-transform: rotate(-80deg);
		 -o-transform: rotate(-80deg);
		 transform: rotate(-80deg);
	}
	 75% {
		 -webkit-transform: rotate(-70deg);
		 -moz-transform: rotate(-70deg);
		 -ms-transform: rotate(-70deg);
		 -o-transform: rotate(-70deg);
		 transform: rotate(-70deg);
	}
	 100% {
		 -webkit-transform: rotate(-80deg);
		 -moz-transform: rotate(-80deg);
		 -ms-transform: rotate(-80deg);
		 -o-transform: rotate(-80deg);
		 transform: rotate(-80deg);
	}
}
 @keyframes reg_right1 {
	 0% {
		 -webkit-transform: rotate(-80deg);
		 -moz-transform: rotate(-80deg);
		 -ms-transform: rotate(-80deg);
		 -o-transform: rotate(-80deg);
		 transform: rotate(-80deg);
	}
	 25% {
		 -webkit-transform: rotate(-70deg);
		 -moz-transform: rotate(-70deg);
		 -ms-transform: rotate(-70deg);
		 -o-transform: rotate(-70deg);
		 transform: rotate(-70deg);
	}
	 50% {
		 -webkit-transform: rotate(-80deg);
		 -moz-transform: rotate(-80deg);
		 -ms-transform: rotate(-80deg);
		 -o-transform: rotate(-80deg);
		 transform: rotate(-80deg);
	}
	 75% {
		 -webkit-transform: rotate(-70deg);
		 -moz-transform: rotate(-70deg);
		 -ms-transform: rotate(-70deg);
		 -o-transform: rotate(-70deg);
		 transform: rotate(-70deg);
	}
	 100% {
		 -webkit-transform: rotate(-80deg);
		 -moz-transform: rotate(-80deg);
		 -ms-transform: rotate(-80deg);
		 -o-transform: rotate(-80deg);
		 transform: rotate(-80deg);
	}
}
 @-webkit-keyframes reg_right2 {
	 0% {
		 -webkit-transform: rotate(92deg);
		 -moz-transform: rotate(92deg);
		 -ms-transform: rotate(92deg);
		 -o-transform: rotate(92deg);
		 transform: rotate(92deg);
	}
	 25% {
		 -webkit-transform: rotate(82deg);
		 -moz-transform: rotate(82deg);
		 -ms-transform: rotate(82deg);
		 -o-transform: rotate(82deg);
		 transform: rotate(82deg);
	}
	 50% {
		 -webkit-transform: rotate(92deg);
		 -moz-transform: rotate(92deg);
		 -ms-transform: rotate(92deg);
		 -o-transform: rotate(92deg);
		 transform: rotate(92deg);
	}
	 75% {
		 -webkit-transform: rotate(82deg);
		 -moz-transform: rotate(82deg);
		 -ms-transform: rotate(82deg);
		 -o-transform: rotate(82deg);
		 transform: rotate(82deg);
	}
	 100% {
		 -webkit-transform: rotate(92deg);
		 -moz-transform: rotate(92deg);
		 -ms-transform: rotate(92deg);
		 -o-transform: rotate(92deg);
		 transform: rotate(92deg);
	}
}
 @-moz-keyframes reg_right2 {
	 0% {
		 -webkit-transform: rotate(92deg);
		 -moz-transform: rotate(92deg);
		 -ms-transform: rotate(92deg);
		 -o-transform: rotate(92deg);
		 transform: rotate(92deg);
	}
	 25% {
		 -webkit-transform: rotate(82deg);
		 -moz-transform: rotate(82deg);
		 -ms-transform: rotate(82deg);
		 -o-transform: rotate(82deg);
		 transform: rotate(82deg);
	}
	 50% {
		 -webkit-transform: rotate(92deg);
		 -moz-transform: rotate(92deg);
		 -ms-transform: rotate(92deg);
		 -o-transform: rotate(92deg);
		 transform: rotate(92deg);
	}
	 75% {
		 -webkit-transform: rotate(82deg);
		 -moz-transform: rotate(82deg);
		 -ms-transform: rotate(82deg);
		 -o-transform: rotate(82deg);
		 transform: rotate(82deg);
	}
	 100% {
		 -webkit-transform: rotate(92deg);
		 -moz-transform: rotate(92deg);
		 -ms-transform: rotate(92deg);
		 -o-transform: rotate(92deg);
		 transform: rotate(92deg);
	}
}
 @keyframes reg_right2 {
	 0% {
		 -webkit-transform: rotate(92deg);
		 -moz-transform: rotate(92deg);
		 -ms-transform: rotate(92deg);
		 -o-transform: rotate(92deg);
		 transform: rotate(92deg);
	}
	 25% {
		 -webkit-transform: rotate(82deg);
		 -moz-transform: rotate(82deg);
		 -ms-transform: rotate(82deg);
		 -o-transform: rotate(82deg);
		 transform: rotate(82deg);
	}
	 50% {
		 -webkit-transform: rotate(92deg);
		 -moz-transform: rotate(92deg);
		 -ms-transform: rotate(92deg);
		 -o-transform: rotate(92deg);
		 transform: rotate(92deg);
	}
	 75% {
		 -webkit-transform: rotate(82deg);
		 -moz-transform: rotate(82deg);
		 -ms-transform: rotate(82deg);
		 -o-transform: rotate(82deg);
		 transform: rotate(82deg);
	}
	 100% {
		 -webkit-transform: rotate(92deg);
		 -moz-transform: rotate(92deg);
		 -ms-transform: rotate(92deg);
		 -o-transform: rotate(92deg);
		 transform: rotate(92deg);
	}
}
 @-webkit-keyframes arm_left1 {
	 0% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 52.5% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 57% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 70.5% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
}
 @-moz-keyframes arm_left1 {
	 0% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 52.5% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 57% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 70.5% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
}
 @keyframes arm_left1 {
	 0% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 52.5% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 57% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 70.5% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
}
 @-webkit-keyframes arm_left2 {
	 0% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 15% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 20% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 35% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 40% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 55% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 60% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 75% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 80% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 95% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 100% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
}
 @-moz-keyframes arm_left2 {
	 0% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 15% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 20% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 35% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 40% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 55% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 60% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 75% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 80% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 95% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 100% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
}
 @keyframes arm_left2 {
	 0% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 15% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 20% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 35% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 40% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 55% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 60% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 75% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 80% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
	 95% {
		 -webkit-transform: rotate(109deg);
		 -moz-transform: rotate(109deg);
		 -ms-transform: rotate(109deg);
		 -o-transform: rotate(109deg);
		 transform: rotate(109deg);
	}
	 100% {
		 -webkit-transform: rotate(57deg);
		 -moz-transform: rotate(57deg);
		 -ms-transform: rotate(57deg);
		 -o-transform: rotate(57deg);
		 transform: rotate(57deg);
	}
}
 @-webkit-keyframes arm_left3 {
	 0% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 15% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 20% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 35% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 40% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 55% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 60% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 75% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 80% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 95% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 100% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
}
 @-moz-keyframes arm_left3 {
	 0% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 15% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 20% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 35% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 40% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 55% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 60% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 75% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 80% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 95% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 100% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
}
 @keyframes arm_left3 {
	 0% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 15% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 20% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 35% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 40% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 55% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 60% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 75% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 80% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
	 95% {
		 -webkit-transform: rotate(45deg);
		 -moz-transform: rotate(45deg);
		 -ms-transform: rotate(45deg);
		 -o-transform: rotate(45deg);
		 transform: rotate(45deg);
	}
	 100% {
		 -webkit-transform: rotate(30deg);
		 -moz-transform: rotate(30deg);
		 -ms-transform: rotate(30deg);
		 -o-transform: rotate(30deg);
		 transform: rotate(30deg);
	}
}
 @-webkit-keyframes arm_right1 {
	 0% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
	 40% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
	 57% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 60% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 77% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 80% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 97% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
	 100% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
}
 @-moz-keyframes arm_right1 {
	 0% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
	 40% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
	 57% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 60% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 77% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 80% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 97% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
	 100% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
}
 @keyframes arm_right1 {
	 0% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
	 40% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
	 57% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 60% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 77% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 80% {
		 -webkit-transform: rotate(12deg);
		 -moz-transform: rotate(12deg);
		 -ms-transform: rotate(12deg);
		 -o-transform: rotate(12deg);
		 transform: rotate(12deg);
	}
	 97% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
	 100% {
		 -webkit-transform: rotate(-54deg);
		 -moz-transform: rotate(-54deg);
		 -ms-transform: rotate(-54deg);
		 -o-transform: rotate(-54deg);
		 transform: rotate(-54deg);
	}
}
 @-webkit-keyframes arm_right2 {
	 0% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 17% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 20% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 37% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 40% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 57% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 60% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 77% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 80% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 97% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 100% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
}
 @-moz-keyframes arm_right2 {
	 0% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 17% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 20% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 37% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 40% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 57% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 60% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 77% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 80% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 97% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 100% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
}
 @keyframes arm_right2 {
	 0% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 17% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 20% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 37% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 40% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 57% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 60% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 77% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 80% {
		 -webkit-transform: rotate(83deg);
		 -moz-transform: rotate(83deg);
		 -ms-transform: rotate(83deg);
		 -o-transform: rotate(83deg);
		 transform: rotate(83deg);
	}
	 97% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
	 100% {
		 -webkit-transform: rotate(153deg);
		 -moz-transform: rotate(153deg);
		 -ms-transform: rotate(153deg);
		 -o-transform: rotate(153deg);
		 transform: rotate(153deg);
	}
}
 @-webkit-keyframes arm_right3 {
	 0% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 40% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 57% {
		 -webkit-transform: rotate(-46deg);
		 -moz-transform: rotate(-46deg);
		 -ms-transform: rotate(-46deg);
		 -o-transform: rotate(-46deg);
		 transform: rotate(-46deg);
	}
	 60% {
		 -webkit-transform: rotate(-46deg);
		 -moz-transform: rotate(-46deg);
		 -ms-transform: rotate(-46deg);
		 -o-transform: rotate(-46deg);
		 transform: rotate(-46deg);
	}
	 97% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 100% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
}
 @-moz-keyframes arm_right3 {
	 0% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 40% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 57% {
		 -webkit-transform: rotate(-46deg);
		 -moz-transform: rotate(-46deg);
		 -ms-transform: rotate(-46deg);
		 -o-transform: rotate(-46deg);
		 transform: rotate(-46deg);
	}
	 60% {
		 -webkit-transform: rotate(-46deg);
		 -moz-transform: rotate(-46deg);
		 -ms-transform: rotate(-46deg);
		 -o-transform: rotate(-46deg);
		 transform: rotate(-46deg);
	}
	 97% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 100% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
}
 @keyframes arm_right3 {
	 0% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 40% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 57% {
		 -webkit-transform: rotate(-46deg);
		 -moz-transform: rotate(-46deg);
		 -ms-transform: rotate(-46deg);
		 -o-transform: rotate(-46deg);
		 transform: rotate(-46deg);
	}
	 60% {
		 -webkit-transform: rotate(-46deg);
		 -moz-transform: rotate(-46deg);
		 -ms-transform: rotate(-46deg);
		 -o-transform: rotate(-46deg);
		 transform: rotate(-46deg);
	}
	 97% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
	 100% {
		 -webkit-transform: rotate(0);
		 -moz-transform: rotate(0);
		 -ms-transform: rotate(0);
		 -o-transform: rotate(0);
		 transform: rotate(0);
	}
}
 @-webkit-keyframes face {
	 0% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
	 45% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
	 50% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 60% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 65% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 70% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
	 80% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 100% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
}
 @-moz-keyframes face {
	 0% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
	 45% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
	 50% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 60% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 65% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 70% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
	 80% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 100% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
}
 @keyframes face {
	 0% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
	 45% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
	 50% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 60% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 65% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 70% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
	 80% {
		 -webkit-transform: rotate(0) translate(0, 0);
		 -moz-transform: rotate(0) translate(0, 0);
		 -ms-transform: rotate(0) translate(0, 0);
		 -o-transform: rotate(0) translate(0, 0);
		 transform: rotate(0) translate(0, 0);
	}
	 100% {
		 -webkit-transform: rotate(-13deg) translate(0, 0);
		 -moz-transform: rotate(-13deg) translate(0, 0);
		 -ms-transform: rotate(-13deg) translate(0, 0);
		 -o-transform: rotate(-13deg) translate(0, 0);
		 transform: rotate(-13deg) translate(0, 0);
	}
}
 @-webkit-keyframes body {
	 0% {
		 top: 22px;
	}
	 25% {
		 top: 24px;
	}
	 50% {
		 top: 22px;
	}
	 75% {
		 top: 24px;
	}
	 100% {
		 top: 22px;
	}
}
 @-moz-keyframes body {
	 0% {
		 top: 22px;
	}
	 25% {
		 top: 24px;
	}
	 50% {
		 top: 22px;
	}
	 75% {
		 top: 24px;
	}
	 100% {
		 top: 22px;
	}
}
 @keyframes body {
	 0% {
		 top: 22px;
	}
	 25% {
		 top: 24px;
	}
	 50% {
		 top: 22px;
	}
	 75% {
		 top: 24px;
	}
	 100% {
		 top: 22px;
	}
}
 html, body {
	 width: 100%;
	 height: 100%;
}
 body {
	 position: relative;
	 display: flex;
	 display: -webkit-box;
	 display: -ms-flexbox;
	 font-family: "Cute Font", cursive;
	 margin: 0;
	 background: #3f3c52;
}
 * {
	 position: relative;
}
 *:before, *:after {
	 position: absolute;
	 content: "";
}
 
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="wrapper">
    <div class="human">
        <div class="human__head">
            <div class="human__face"><span></span>
                <div class="human__hair">
                    <div></div>
                    <div></div>
                </div>
                <div class="human__hood"></div>
            </div>
            <div class="human__body">
                <div>
                    <div></div>
                </div>
                <div class="human__reg human__reg--right">
                    <div>
                        <div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="human__arm human__arm--left">
                    <div>
                        <div>
                            <div>
                                <div class="stick"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="human__arm human__arm--right">
                    <div>
                        <div>
                            <div>
                                <div class="stick"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="drum">
        <div class="crash-cymbal"><span></span><span></span>
            <div class="cymbal"></div>
        </div>
        <div class="floor">
            <div class="tam">
                <div class="rim">
                    <div></div>
                    <div></div>
                </div>
                <div class="rug">
                    <div class="top"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="bottom"></div>
                </div>
            </div><span></span><span></span>
        </div>
        <div class="snare">
            <div class="tam">
                <div class="rim">
                    <div></div>
                    <div></div>
                </div>
                <div class="rug">
                    <div class="top"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="bottom"></div>
                </div>
            </div><span></span><span></span><span></span>
        </div>
        <div class="hightam">
            <div class="tam">
                <div class="rim">
                    <div></div>
                    <div></div>
                </div>
                <div class="rug">
                    <div class="top"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="bottom"></div>
                </div>
            </div><span></span>
        </div>
        <div class="bass">
            <div class="head"></div><span></span><span></span>
        </div>
        <div class="hi-hat-cymbal"><span></span>
            <div class="cymbal top"></div>
            <div class="cymbal bottom"></div>
        </div>
    </div>
</div>
</body>
</html>