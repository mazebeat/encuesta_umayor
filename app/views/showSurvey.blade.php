@extends('layouts.user')

@section('style')
<style type="text/css" media="screen">

  @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

  .input-group-addon.beautiful input[type="checkbox"],
  .input-group-addon.beautiful input[type="radio"] {
    display: none;
  }
</style>

@stop

@section('content')
{{ HTML::survey($questions, 'FIRST SURVEY') }}
@stop

@section('script')
<script>
  $(function () {
    $('.input-group-addon.beautiful').each(function () {

      var $widget = $(this),
      $input = $widget.find('input'),
      type = $input.attr('type');
      settings = {
        checkbox: {
          on: { icon: 'fa fa-check-circle-o' },
          off: { icon: 'fa fa-circle-o' }
        },
        radio: {
          on: { icon: 'fa fa-dot-circle-o' },
          off: { icon: 'fa fa-circle-o' }
        }
      };

      $widget.prepend('<span class="' + settings[type].off.icon + '"></span>');

      $widget.on('click', function () {
        $input.prop('checked', !$input.is(':checked'));
        updateDisplay();
      });

      function updateDisplay() {
        var isChecked = $input.is(':checked') ? 'on' : 'off';

        $widget.find('.fa').attr('class', settings[type][isChecked].icon);

            //Just for desplay
            // isChecked = $input.is(':checked') ? 'checked' : 'not Checked';
            // $widget.closest('.input-group').find('input[type="text"]').val('Input is currently ' + isChecked)
          }

          updateDisplay();
        });
});
</script>
@stop