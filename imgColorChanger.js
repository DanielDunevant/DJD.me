// All credit for this code goes to http://jsfiddle.net/m1erickson/2d7ZN/
/*

HTML SAMPLE
<p>Example shifting color Hue with .getImageData</p>
<p>(Original: left, Recolored: right)</p>
<canvas id="canvas" width=300 height=300></canvas>

CSS SAMPLE
body{ background-color: ivory; }
canvas{border:1px solid red;}

*/

var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

var img = new Image();
img.crossOrigin = "anonymous";
img.onload = start;
img.src = "https://dl.dropboxusercontent.com/u/139992952/multple/marioStanding.png";

function start() {
    ctx.drawImage(img, 0, 0);
    ctx.drawImage(img, 150, 0);
    // shift blueish colors to greenish colors
    recolorPants(-.33);
}

function recolorPants(colorshift) {

    var imgData = ctx.getImageData(150, 0, canvas.width, canvas.height);
    var data = imgData.data;

    for (var i = 0; i < data.length; i += 4) {
        red = data[i + 0];
        green = data[i + 1];
        blue = data[i + 2];
        alpha = data[i + 3];

        // skip transparent/semiTransparent pixels
        if (alpha < 200) {
            continue;
        }

        var hsl = rgbToHsl(red, green, blue);
        var hue = hsl.h * 360;

        // change blueish pixels to the new color
        if (hue > 200 && hue < 300) {
            var newRgb = hslToRgb(hsl.h + colorshift, hsl.s, hsl.l);
            data[i + 0] = newRgb.r;
            data[i + 1] = newRgb.g;
            data[i + 2] = newRgb.b;
            data[i + 3] = 255;
        }
    }
    ctx.putImageData(imgData, 150, 0);
}


function rgbToHsl(r, g, b) {
    r /= 255, g /= 255, b /= 255;
    var max = Math.max(r, g, b),
        min = Math.min(r, g, b);
    var h, s, l = (max + min) / 2;

    if (max == min) {
        h = s = 0; // achromatic
    } else {
        var d = max - min;
        s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
        switch (max) {
            case r:
                h = (g - b) / d + (g < b ? 6 : 0);
                break;
            case g:
                h = (b - r) / d + 2;
                break;
            case b:
                h = (r - g) / d + 4;
                break;
        }
        h /= 6;
    }

    return ({
        h: h,
        s: s,
        l: l,
    });
}


function hslToRgb(h, s, l) {
    var r, g, b;

    if (s == 0) {
        r = g = b = l; // achromatic
    } else {
        function hue2rgb(p, q, t) {
            if (t < 0) t += 1;
            if (t > 1) t -= 1;
            if (t < 1 / 6) return p + (q - p) * 6 * t;
            if (t < 1 / 2) return q;
            if (t < 2 / 3) return p + (q - p) * (2 / 3 - t) * 6;
            return p;
        }

        var q = l < 0.5 ? l * (1 + s) : l + s - l * s;
        var p = 2 * l - q;
        r = hue2rgb(p, q, h + 1 / 3);
        g = hue2rgb(p, q, h);
        b = hue2rgb(p, q, h - 1 / 3);
    }

    return ({
        r: Math.round(r * 255),
        g: Math.round(g * 255),
        b: Math.round(b * 255),
    });
}
