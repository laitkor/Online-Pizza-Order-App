// -----------------------------------------------------------------------------
// ** Module:       QuantityUpDown.js
// **
// ** Description:  Module to implement Up/Down buttons functionality on quantity input fields.
// -----------------------------------------------------------------------------

(function ($, window, undefined) {
    var QuantityUpDown = window.QuantityUpDown = {};
    $.extend(QuantityUpDown, {

        // Private fields
        _console: null,
        _inputField: null,
        _defaultValue: null,
        _maxValue: null,
        // GetLocation
        Increment: function (options) {
            QuantityUpDown.ExtendOptions(options);
            var currentVal = QuantityUpDown.GetInputValue();
            if (currentVal < QuantityUpDown._maxValue) {
                currentVal = currentVal + 1;
            }
            QuantityUpDown.SetInputValue(currentVal);
        },
        Decrement: function (options) {
            QuantityUpDown.ExtendOptions(options);
            var currentVal = QuantityUpDown.GetInputValue();
            if (currentVal > QuantityUpDown._defaultValue) {
                currentVal = currentVal - 1;
            }
            QuantityUpDown.SetInputValue(currentVal);
        },
        ExtendOptions: function (options) {
            var defaults = {
                console: false,
                inputField: null,
                defaultValue: 1,
                maxValue: 99
            };

            // Merge the options into the defaults
            options = $.extend({}, defaults, options);

            // Set console support
            this._console = options.console;
            this._defaultValue = options.defaultValue;
            this._maxValue = options.maxValue;

            // Set fields
            if (options.inputField != null) {
                this._inputField = $('#' + options.inputField);
            }
        },
        GetInputValue: function () {
            var inputValue = QuantityUpDown._defaultValue;
            if (QuantityUpDown._inputField != null) {
                inputValue = parseInt(QuantityUpDown._inputField.val());
            }
            return inputValue;
        },
        SetInputValue: function (value) {
            if (QuantityUpDown._inputField != null && QuantityUpDown._inputField.val() != value) {
                QuantityUpDown._inputField.val(value);
                QuantityUpDown._inputField.change();
            }
        },
        _log: function (title, item) {
            if (this._console && window.console)
                window.console.log(title + ' : ' + item);
        }
    });
} (jQuery, window));