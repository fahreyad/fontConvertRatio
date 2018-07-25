/**
 * description: This is a library of convert font size with selector
 * author: Md Fahreyad Hossain
 * version: 1.0
 * since:25/7/2018 
 */

// Base Width
const baseWidth=1280;
// Converter Selector
function converter(selector,pixel) {
    $(selector).css({
        'fontSize': baseconverter(pixel) + 'px',
    });
}
// Converter function
function baseconverter(pixel) {
    let winWidth=window.innerWidth;
    let partition=baseWidth/pixel;
    return parseFloat(winWidth / partition);
}