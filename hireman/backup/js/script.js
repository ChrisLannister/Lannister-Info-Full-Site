/** * @author Chris Lannister */		$(document).ready(function () {    var scntDiv = $('#p_scents');    var i = $('#p_scents p').size() + 1;    $('#addScnt').live('click', function () {        $('<p><input type="text" size="20" name="invNo[]" value="" placeholder="Invoice No/Contract No" /> <select name="typeOfQueryDropDownBox[]"><option selected="selected" disabled="disabled" value="blank">Select Type of Query</option><option value="HireRate">Hire Rate Query</option><option value="SalesPrice">Sales Price Query</option><option value="DamgeOrLoss">Damage/Loss Query</option><option value="PaperWork">Paperwork Request</option><option value="Other">Other</option></select> <textarea name="details[]" rows="6" cols="20">Details</textarea><a href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv);        i++;        return false;    });    $('#remScnt').live('click', function () {        if (i > 2) {            $(this).parents('p').remove();            i--;        }        return false;    });});$("#s1").click(function(){  $("box1").show();});