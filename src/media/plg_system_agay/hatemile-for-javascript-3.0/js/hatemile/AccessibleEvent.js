/*
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
 */

(function () {
    'use strict';
    this.hatemile || (this.hatemile = {});

    this.hatemile.AccessibleEvent = (function () {
        function AccessibleEvent() {}

        AccessibleEvent.prototype.makeAccessibleDropEvents = function (element) {};

        AccessibleEvent.prototype.makeAccessibleDragEvents = function (element) {};

        AccessibleEvent.prototype.makeAccessibleAllDragandDropEvents = function () {};

        AccessibleEvent.prototype.makeAccessibleHoverEvents = function (element) {};

        AccessibleEvent.prototype.makeAccessibleAllHoverEvents = function () {};

        AccessibleEvent.prototype.makeAccessibleClickEvents = function (element) {};

        AccessibleEvent.prototype.makeAccessibleAllClickEvents = function () {};

        return AccessibleEvent;

    })();

}).call(this);