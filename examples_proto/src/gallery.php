var examples = {};

<?php
$path = "";
include($path."gallery_shared.php");
include($path."gallery_c02.php");
include($path."gallery_c03.php");
include($path."gallery_c05.php");
include($path."gallery_c06.php");
include($path."gallery_c07.php");
include($path."gallery_c08.php");
include($path."gallery_c09.php");
include($path."gallery_c10.php");
include($path."gallery_c11.php");
include($path."gallery_advanced.php");
?>


var gallery = function() {
  function createLi(d) {
    var li = $("<li>");
    var a = $("<a>").attr("href", d.url.replace("../", "http://www.thebookofshaders.com/"));
    var container = $("<div>").attr("class", "imgcontainer")
    .append($("<img>").attr({"src": d.src, "alt": d.caption}))
    .append($("<div>").attr("class", "caption").text(d.caption));
    li.append(a);
    a.append(container);
    return li;
  }

  function createUl(list, length) {
    var ul = $("<ul>");
    for (var i = 0; i < length && i < list.length; i ++) {
      ul.append(createLi(list[i]));
    }
    return ul;
  }

  return {
    createExampleList: function(id, length) {
      if (!length) {length = examples[id].length;}
      var div = $("#" + id + "-examples");
        div.append(createUl(examples[id], length));
      }
  }
}();