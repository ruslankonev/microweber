
<script>

$(document).ready(function(){
   mw.wysiwyg.init();
   mw.tools.dropdown(mwd.getElementById('mw-admin-text-editor'));


   Editor = mw.$('#mw-admin-text-editor');
   Editor.mousedown(function(e){e.preventDefault()})

   Editor.hover(function(){
      $(this).addClass('editor_hover');
   }, function(){
     $(this).removeClass('editor_hover');
   });


});

</script>

<div id="mw-admin-text-editor" class="mw_editor">
        <div class="editor_wrapper">

            <span class="mw_editor_btn mw_editor_image" data-command="custom-image" title="Add/Edit/Remove Image"><span class="ed-ico"></span></span>

            <span class="mw_dlm"></span>

            <span class="mw_editor_btn mw_editor_bold" data-command="bold" title="Bold"><span class="ed-ico"></span></span>
            <span class="mw_editor_btn mw_editor_italic" data-command="italic" title="Italic"><span class="ed-ico"></span></span>
            <span class="mw_editor_btn mw_editor_underline" data-command="underline" title="Underline"><span class="ed-ico"></span></span>

            <span class="mw_dlm"></span>

            <span class="mw_editor_btn mw_editor_alignment mw_editor_justifyleft" data-command="justifyLeft" title="Align Left"><span class="ed-ico"></span></span>
            <span class="mw_editor_btn mw_editor_alignment mw_editor_justifycenter" data-command="justifyCenter" title="Align Center"><span class="ed-ico"></span></span>
            <span class="mw_editor_btn mw_editor_alignment mw_editor_justifyright" data-command="justifyRight" title="Align Right"><span class="ed-ico"></span></span>
            <span class="mw_editor_btn mw_editor_alignment mw_editor_justifyfull" data-command="justifyFull" title="Align Both Sides"><span class="ed-ico"></span></span>


            <span class="mw_dlm"></span>



            <div class="mw_dropdown mw_dropdown_type_wysiwyg mw_dropdown_action_format" id="format_main" title="Format" data-value="">
                <span class="mw_dropdown_val_holder">
                    <span class="dd_rte_arr"></span>
                    <span class="mw_dropdown_val">Format</span>
                </span>
              <div class="mw_dropdown_fields">
                <ul>
                  <li value="h1"><a href="#"><h1>Heading 1</h1></a></li>
                  <li value="h2"><a href="#"><h2>Heading 2</h2></a></li>
                  <li value="h3"><a href="#"><h3>Heading 3</h3></a></li>
                  <li value="h4"><a href="#"><h4>Heading 4</h4></a></li>
                  <li value="h5"><a href="#"><h5>Heading 5</h5></a></li>
                  <li value="h6"><a href="#"><h6>Heading 6</h6></a></li>
                  <li value="p"><a href="#"><p>Paragraph</p></a></li>
                </ul>
              </div>
            </div>



            <div class="mw_dropdown mw_dropdown_type_wysiwyg mw_dropdown_action_font_family" id="font_family_selector_main" title="Font" data-value="Arial">
              <span class="mw_dropdown_val_holder">
                  <span class="dd_rte_arr"></span>
                  <span class="mw_dropdown_val">Arial</span>
              </span>
              <div class="mw_dropdown_fields">
                <ul>
                  <li value="Arial"><a href="#" style="font-family:Arial">Arial</a></li>
                  <li value="Tahoma"><a href="#" style="font-family:Tahoma">Tahoma</a></li>
                  <li value="Verdana"><a href="#" style="font-family:Verdana">Verdana</a></li>
                  <li value="Georgia"><a href="#" style="font-family:Georgia">Georgia</a></li>
                  <li value="Times New Roman"><a href="#" style="font-family: 'Times New Roman'">Times New Roman</a></li>
                </ul>
              </div>
            </div>




            <div class="mw_dropdown mw_dropdown_type_wysiwyg mw_dropdown_action_font_size" id="font_size_selector_main" title="Font Size">

                <span class="mw_dropdown_val_holder">
                    <span class="dd_rte_arr"></span>
                    <span class="mw_dropdown_val">10pt</span>
                </span>
              <div class="mw_dropdown_fields">
                <ul>
                  <li value="1"><a href="#" style="font-size: 8pt">8pt</a></li>
                  <li value="2"><a href="#" style="font-size: 10pt">10pt</a></li>
                  <li value="3"><a href="#" style="font-size: 12pt">12pt</a></li>
                  <li value="4"><a href="#" style="font-size: 14pt">14pt</a></li>
                  <li value="5"><a href="#" style="font-size: 18pt">18pt</a></li>
                  <li value="6"><a href="#" style="font-size: 24pt">24pt</a></li>
                  <li value="7"><a href="#" style="font-size: 36pt">36pt</a></li>
                </ul>
              </div>
            </div>



            <span class="mw_dlm"></span>


            <span class="mw_editor_btn mw_editor_ol" data-command="insertorderedlist" title="Ordered List"><span class="ed-ico"></span></span>
            <span class="mw_editor_btn mw_editor_ul" data-command="insertunorderedlist" title="Unordered List"><span class="ed-ico"></span></span>

            <span class="mw_editor_btn mw_editor_indent" data-command="indent" title="Indent"><span class="ed-ico"></span></span>
            <span class="mw_editor_btn mw_editor_outdent" data-command="outdent" title="Outdent"><span class="ed-ico"></span></span>



            <span class="mw_dlm"></span>




            <span class="mw_editor_btn mw_editor_link" data-command="custom-link" title="Add/Edit/Remove Link"><span class="ed-ico"></span></span>










        </div>

    </div>