var b = document.getElementById("calc");
b.onclick = calculate;

function calculate() {

    var c = 0
    var fb = document.getElementById("feedback");

    var x = parseFloat(document.getElementById("x").value);
    if (!Number.isNaN(x)) {
        c++;
    }
    var vi = parseFloat(document.getElementById("vi").value);
    if (!Number.isNaN(vi)) {
        c += 2;
    }
    var vf = parseFloat(document.getElementById("vf").value);
    if (!Number.isNaN(vf)) {
        c += 4;
    }
    var a = parseFloat(document.getElementById("a").value);
    if (!Number.isNaN(a)) {
        c += 8;
    }
    var t = parseFloat(document.getElementById("t").value);
    if (!Number.isNaN(t)) {
        c += 16;
    }
    var bad = false;
    if (c === 0 || c == 31) {
        bad = true;
        fb.innerHTML = "Why are you running this program?";
    }
    else if ([1, 2, 4, 8, 16].includes(c)) {
        bad = true;
        fb.innerHTML = "Well, I can't help you too much now, can I?";
    }
    else if (c == 7) {
        t = x / (vi + vf) * 2;
        a = (vf - vi) / t;
    }
    else if (c == 11) {
        vf = (vi ** 2 + 2 * a * x) ** 0.5;
        t = (vf - vi) / a;
    }
    else if (c == 13) {
        vi = (vf ** 2 - 2 * a * x) ** 0.5;
        t = (vf - vi) / a;
    }
    else if (c == 14) {
        t = (vf - vi) / a;
        x = vi * t + 0.5 * a * t ** 2;
    }
    else if (c == 15) {
        t = (vf - vi) / a;
    }
    else if (c == 19) {
        a = (x - vi * t) * 2 / t ** 2;
    }
    else if (c == 17) {
        v = x / t;
        fb.innerHTML = "Average velocity = ${v} m/s";
    }
    else if (c == 22) {
        a = (vf - vi) / t;
        x = (vi + vf) / 2 * t;
    }
    else if (c == 23) {
        a = (vf - vi) / t;
    }
    else if (c == 26) {
        vf = vi + t * a;
        x = vi * t + 0.5 * a * t ** 2;
    }
    else if (c == 27) {
        vf = vi + t * a;
    }
    else if (c == 28) {
        vi = vf - t * a;
        x = vi * t + 0.5 * a * t ** 2;
    }
    else if (c == 29) {
        vi = vf - t * a;
    }
    else if (c == 30) {
        x = vi * t + 0.5 * a * t ** 2;
    }
    else {
        bad = true;
        fb.innerHTML = "Sorry, can't help you there.";
    }
    if (!bad) {
        try {
            v = x / t;
            fb.innerHTML = "Average velocity = " + v + " m/s";
        }
        catch(err) {
            v = v;
        }
        document.getElementById("x").value = x;
        document.getElementById("vi").value = vi;
        document.getElementById("vf").value = vf;
        document.getElementById("a").value = a;
        document.getElementById("t").value = t;
    }
}