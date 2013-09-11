// It is very important that you leave this function in a separate .js file.
// Putting this function into the HTML page will lead to problems in the
// "Eolas Patched" version of Internet Explorer, to be released in early '04.
// Note: To put the .JAR file in a different place than the HTML, change the line:
//   "codebase='.'"+
// to instead be (for example):
//   "codebase='/downloads/us/products/3d_demo_zips'"+
// No other lines need to be changed here, or on the HTML page which includes
// this file -- all content will be loaded relative to that code base because of
// the statement Meson.setCurrentDataSource(Meson.documentBase=Meson.codeBase), below.
function kaonApp(w,h,s)
{
  document.write
    ("<applet code=com.kaon.meson.MesonApplet archive='mesonApplet.jar,rasterGluon.jar,sceneGluon.jar' width="+w+" height="+h+" alt='Please Enable Java' "+
     "style='border:solid #d7d9d8 1px; -moz-box-shadow: 0px 0px 4px #d7d9d8; -webkit-box-shadow: 0px 0px 4px #d7d9d8; box-shadow: 0px 0px 4px #d7d9d8; ' "+
     "codebase='.'"+
     "MAYSCRIPT><param name='java_arguments' value='-Xmx128M'><param name='separate_jvm' value='true'><param name='meson' value='"+
     'Applet.Primary.fill="f5f7f6";'+   // Change to 1d201f to for white objects
     'Meson.setCurrentDataSource(Meson.documentBase=Meson.codeBase);'+
     'Meson.gluon("com.kaon.meson.raster.RasterGluon");'+
     'Meson.gluon("com.kaon.meson.scene.SceneGluon");'+
     'Image.Loading.anchor=_C;'+
     'Image.Loading.x={Display.Primary.width/2};'+
     'Image.Loading.y={Display.Primary.height/2};'+
     'Image.Loading.text="%Center{Powered by Kaon\\nwww.kaon.com}";'+
     'useAnalytics=(""!="");'+
     s+
     'Data.Program.url="ui.jar";'+
     "'>Java is currently not available on your browser. Please visit <a href='http://java.com' target='_blank'>java.com</a> to get the latest version.</applet>");
}

var _gaq;
if ("" != "")
{
  _gaq = _gaq || [];
  _gaq.push(['_setAccount', '']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
}
function analytics(action, label)
{
  _gaq.push(['_trackEvent', 'GE Protimeter MMS+', action, label]);
}
