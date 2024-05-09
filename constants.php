<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * List of all pokcertificates constants
 *
 * @package mod_pokcertificate
 * @copyright  2024 Moodle India Information Solutions Pvt Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_pokcertificate;

defined('MOODLE_INTERNAL') || die;

$prodtype = get_config('mod_pokcertificate', 'prodtype');

$tempurl = ($prodtype == 1 ? 'https://templates.credentity.xyz' : 'https://templates.pok.tech');
define('TEMPLATE_MANAGER_ROOT', $tempurl);

$minturl = ($prodtype == 1 ? 'https://minter.credentity.xyz' : 'https://mint.pok.tech');
define('MINTER_ROOT', $minturl);

$apikeysurl = ($prodtype == 1 ? 'https://api-keys.credentity.xyz' : 'https://api-keys.pok.tech');
define('API_KEYS_ROOT', $apikeysurl);

$rbacurl = ($prodtype == 1 ? 'https://rbac.credentity.xyz' : 'https://rbac.pok.tech');
define('RBAC_ROOT', $rbacurl);

$custodianurl = ($prodtype == 1 ? 'https://custodian.credentity.xyz' : 'https://custodian.pok.tech');
define('CUSTODIAN_ROOT', $custodianurl);

$sampledata = [
    "name" => "John Galt",
    "title" => "Engineer",
    "date" => 1704423600000,
    "institution" => "Ohio State University",
];
define('SAMPLE_DATA', $sampledata);

$emitcertificatedata = '{
    "email":"vinod.aleti@moodle.com",
    "institution":"Shyam QA",
    "identification":"0123456789",
    "first_name":"Vinod",
    "last_name":"Aleti",
    "title":"Course Completion",
    "template_base64":"ew0KICAgICJ2ZXJzaW9uIjogMSwNCiAgICAidGVtcGxhdGUiOiBbDQogICAgICAgIHsNCiAgICAgICAgICAgICJuYW1lIjogImJhY2tncm91bmQiLA0KICAgICAgICAgICAgInR5cGUiOiAiYmFzZV9pbWFnZSIsDQogICAgICAgICAgICAib3JkZXIiOiAxLA0KICAgICAgICAgICAgInZhbHVlIjogImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBeUFBQUFKdUNBWUFBQUJJVldiQUFBQUFDWEJJV1hNQUFBc1RBQUFMRXdFQW1wd1lBQUFBQVhOU1IwSUFyczRjNlFBQUFBUm5RVTFCQUFDeGp3djhZUVVBQUE2TFNVUkJWSGdCN2QzdGNSdFZGSURodTY3QWRHQlhRRkpCU0FkT0JkQUJVRUdnQXBJT1FnZnBJS1FDUWdWUkI3Z0RjZGVXSURIT2g4SDcvc256ekp5UlJsb1Y4TTdacTEzR1o5cnY5NmZ6NVdMT296a1A1cHpOT1IwQUFNQ1g1bkxPYnM2Yk9hL252RnlXNWZKemZyaDg2b0laSG1mejVmczUzdzNCQVFBQTNPN0ZuSjluaU93K2R0RUhBK1N3OFhnNjU0Y0JBQUR3ZVo3TkNQbnhRMS9lR2lDSHJjZXJjWDJiRlFBQXdGM3M1ankrYlJ0eWN2T0RHUi9yK1E3eEFRQUEvRmRuYzE0ZDJ1STk3MjFBYkQ0QUFJQjd0QnMzTmlFM0ErVHRFQjhBQU1EOTJjMTVlUHlYckw5dndacng4Y3NRSHdBQXdQMDZHOWQvYm5YbGFnTnl1UFhxN1FBQUFOakcrWG9yMW5FRDhuUUFBQUJzNStyeEhzdmhlUjkvRGdBQWdPMnNaMERPMXczSXhRQUFBTmpXdXZpNFdBUGswUUFBQU5qZW96VkFIZ3dBQUlEdFBWalBnS3puUDA0SEFBREF0aTdYQU5rUEFBQ0F3TWtBQUFDSUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdJd0FBUUFBTWdJRUFBRElDQkFBQUNBalFBQUFnSXdBQVFBQU1nSUVBQURJQ0JBQUFDQWpRQUFBZ0l3QUFRQUFNZ0lFQUFESUNCQUFBQ0FqUUFBQWdNd2FJSmNEQUFCZ2U1ZHJnT3dHQUFEQTluWnJnUHd4QUFBQXR2ZG1EWkRmQmdBQXdQWmVML3Y5L25TK2VUdm5kQUFBQUd6bnE1TmxXZFpENkw4T0FBQ0E3YnhZMjJOWjM4MHR5Tm00M29JQUFBQnM0WHdHeU5VaDlMRyttUy9QQndBQXdQMTdmbWlPc1J3L09ad0YrWDNPMlFBQUFMZ2Z1emtQRDBjLy9ua1MrdUdEeDhOelFRQUFnUHV4bS9QNEdCK3JrM2UvUGF4Rm5nd1JBZ0FBL0QrN09VK090MTRkTGJkZGVUaVUvbXE0SFFzQUFMaTczYmplZk94dWZuRnkyOVhyaFhQT2g0UHBBQURBM2F3TjhmQzIrRmd0bi9yMVlSdnkwNXh2QndBQXdMOGRueTM0N0VQaGNmVEpBRGs2L0V2V3haeHY1bnc5cm0vUDh2UjBBQUQ0OHF6QnNadnpaczdyT1MvZlBXaitNWDhCSUUyS0RaaVRSSVlBQUFBQVNVVk9SSzVDWUlJPSIsDQogICAgICAgICAgICAic3JjdHlwZSI6ICJiYXNlNjQiDQogICAgICAgIH0sDQogICAgICAgIHsNCiAgICAgICAgICAgICJuYW1lIjogInFyY29kZSIsDQogICAgICAgICAgICAidHlwZSI6ICJxcmNvZGUiLA0KICAgICAgICAgICAgInNpemUiOiB7DQogICAgICAgICAgICAgICAgIndpZHRoIjogMTUwLA0KICAgICAgICAgICAgICAgICJoZWlnaHQiOiAxNTANCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAiY29vcmRpbmF0ZXMiOiB7DQogICAgICAgICAgICAgICAgIngiOiA1MCwNCiAgICAgICAgICAgICAgICAieSI6IDQyMA0KICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJvcmRlciI6IDMNCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAiUG9wcGlucyIsDQogICAgICAgICAgICAidmFsdWUiOiAiUW1YVEhwbmRTdUFtQ0JpWm51OWpuN0hjNDg5OEw3d2VLeENxcE5HektTZUNFRCIsDQogICAgICAgICAgICAidHlwZSI6ICJmb250IiwNCiAgICAgICAgICAgICJzcmN0eXBlIjogImlwZnMiDQogICAgICAgIH0sDQogICAgICAgIHsNCiAgICAgICAgICAgICJuYW1lIjogIlBvcHBpbnMiLA0KICAgICAgICAgICAgInZhbHVlIjogIlFtWFRIcG5kU3VBbUNCaVpudTlqbjdIYzQ4OThMN3dlS3hDcXBOR3pLU2VDRUQiLA0KICAgICAgICAgICAgInR5cGUiOiAiZm9udCIsDQogICAgICAgICAgICAic3JjdHlwZSI6ICJpcGZzIg0KICAgICAgICB9LA0KICAgICAgICB7DQogICAgICAgICAgICAibmFtZSI6ICJQb3BwaW5zIiwNCiAgICAgICAgICAgICJ2YWx1ZSI6ICJRbVhUSHBuZFN1QW1DQmlabnU5am43SGM0ODk4TDd3ZUt4Q3FwTkd6S1NlQ0VEIiwNCiAgICAgICAgICAgICJ0eXBlIjogImZvbnQiLA0KICAgICAgICAgICAgInNyY3R5cGUiOiAiaXBmcyINCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAiUG9wcGlucyIsDQogICAgICAgICAgICAidmFsdWUiOiAiUW1YVEhwbmRTdUFtQ0JpWm51OWpuN0hjNDg5OEw3d2VLeENxcE5HektTZUNFRCIsDQogICAgICAgICAgICAidHlwZSI6ICJmb250IiwNCiAgICAgICAgICAgICJzcmN0eXBlIjogImlwZnMiDQogICAgICAgIH0sDQogICAgICAgIHsNCiAgICAgICAgICAgICJuYW1lIjogIlBvcHBpbnMiLA0KICAgICAgICAgICAgInZhbHVlIjogIlFtWFRIcG5kU3VBbUNCaVpudTlqbjdIYzQ4OThMN3dlS3hDcXBOR3pLU2VDRUQiLA0KICAgICAgICAgICAgInR5cGUiOiAiZm9udCIsDQogICAgICAgICAgICAic3JjdHlwZSI6ICJpcGZzIg0KICAgICAgICB9LA0KICAgICAgICB7DQogICAgICAgICAgICAibmFtZSI6ICJQb3BwaW5zIiwNCiAgICAgICAgICAgICJ2YWx1ZSI6ICJRbVhUSHBuZFN1QW1DQmlabnU5am43SGM0ODk4TDd3ZUt4Q3FwTkd6S1NlQ0VEIiwNCiAgICAgICAgICAgICJ0eXBlIjogImZvbnQiLA0KICAgICAgICAgICAgInNyY3R5cGUiOiAiaXBmcyINCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAiUG9wcGlucyIsDQogICAgICAgICAgICAidmFsdWUiOiAiUW1YVEhwbmRTdUFtQ0JpWm51OWpuN0hjNDg5OEw3d2VLeENxcE5HektTZUNFRCIsDQogICAgICAgICAgICAidHlwZSI6ICJmb250IiwNCiAgICAgICAgICAgICJzcmN0eXBlIjogImlwZnMiDQogICAgICAgIH0sDQogICAgICAgIHsNCiAgICAgICAgICAgICJuYW1lIjogImxhYmVsOnByb3VkbHkiLA0KICAgICAgICAgICAgInR5cGUiOiAidGV4dCIsDQogICAgICAgICAgICAiZm9udCI6ICJQb3BwaW5zIiwNCiAgICAgICAgICAgICJvcmRlciI6IDMsDQogICAgICAgICAgICAiY29vcmRpbmF0ZXMiOiB7DQogICAgICAgICAgICAgICAgIngiOiA1MCwNCiAgICAgICAgICAgICAgICAieSI6IDE3MA0KICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJzaXplIjogew0KICAgICAgICAgICAgICAgICJ3aWR0aCI6IDI2MCwNCiAgICAgICAgICAgICAgICAiaGVpZ2h0IjogNDANCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAibWF4Rm9udFNpemUiOiAxNiwNCiAgICAgICAgICAgICJhbGlnbiI6ICJsZWZ0IiwNCiAgICAgICAgICAgICJ0ZXh0Q29sb3IiOiB7DQogICAgICAgICAgICAgICAgInIiOiAwLA0KICAgICAgICAgICAgICAgICJnIjogMCwNCiAgICAgICAgICAgICAgICAiYiI6IDAsDQogICAgICAgICAgICAgICAgImEiOiAyNTUNCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAiYmFja2dyb3VuZCI6IHsNCiAgICAgICAgICAgICAgICAiciI6IDAsDQogICAgICAgICAgICAgICAgImciOiAwLA0KICAgICAgICAgICAgICAgICJiIjogMCwNCiAgICAgICAgICAgICAgICAiYSI6IDANCiAgICAgICAgICAgIH0NCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAibGFiZWw6dGl0bGUiLA0KICAgICAgICAgICAgInR5cGUiOiAidGV4dCIsDQogICAgICAgICAgICAiZm9udCI6ICJQb3BwaW5zIiwNCiAgICAgICAgICAgICJvcmRlciI6IDMsDQogICAgICAgICAgICAiY29vcmRpbmF0ZXMiOiB7DQogICAgICAgICAgICAgICAgIngiOiA1MCwNCiAgICAgICAgICAgICAgICAieSI6IDI3MA0KICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJzaXplIjogew0KICAgICAgICAgICAgICAgICJ3aWR0aCI6IDI2MCwNCiAgICAgICAgICAgICAgICAiaGVpZ2h0IjogNDANCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAibWF4Rm9udFNpemUiOiAxNiwNCiAgICAgICAgICAgICJhbGlnbiI6ICJsZWZ0IiwNCiAgICAgICAgICAgICJ0ZXh0Q29sb3IiOiB7DQogICAgICAgICAgICAgICAgInIiOiAwLA0KICAgICAgICAgICAgICAgICJnIjogMCwNCiAgICAgICAgICAgICAgICAiYiI6IDAsDQogICAgICAgICAgICAgICAgImEiOiAyNTUNCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAiYmFja2dyb3VuZCI6IHsNCiAgICAgICAgICAgICAgICAiciI6IDAsDQogICAgICAgICAgICAgICAgImciOiAwLA0KICAgICAgICAgICAgICAgICJiIjogMCwNCiAgICAgICAgICAgICAgICAiYSI6IDANCiAgICAgICAgICAgIH0NCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAibGFiZWw6ZGF0ZSIsDQogICAgICAgICAgICAidHlwZSI6ICJ0ZXh0IiwNCiAgICAgICAgICAgICJmb250IjogIlBvcHBpbnMiLA0KICAgICAgICAgICAgIm9yZGVyIjogMywNCiAgICAgICAgICAgICJjb29yZGluYXRlcyI6IHsNCiAgICAgICAgICAgICAgICAieCI6IDIxMCwNCiAgICAgICAgICAgICAgICAieSI6IDQyMA0KICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJzaXplIjogew0KICAgICAgICAgICAgICAgICJ3aWR0aCI6IDEwMCwNCiAgICAgICAgICAgICAgICAiaGVpZ2h0IjogNDANCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAibWF4Rm9udFNpemUiOiAxNiwNCiAgICAgICAgICAgICJhbGlnbiI6ICJsZWZ0IiwNCiAgICAgICAgICAgICJ0ZXh0Q29sb3IiOiB7DQogICAgICAgICAgICAgICAgInIiOiAwLA0KICAgICAgICAgICAgICAgICJnIjogMCwNCiAgICAgICAgICAgICAgICAiYiI6IDAsDQogICAgICAgICAgICAgICAgImEiOiAyNTUNCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAiYmFja2dyb3VuZCI6IHsNCiAgICAgICAgICAgICAgICAiciI6IDAsDQogICAgICAgICAgICAgICAgImciOiAwLA0KICAgICAgICAgICAgICAgICJiIjogMCwNCiAgICAgICAgICAgICAgICAiYSI6IDANCiAgICAgICAgICAgIH0NCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAiaW5zdGl0dXRpb24iLA0KICAgICAgICAgICAgInR5cGUiOiAidGV4dCIsDQogICAgICAgICAgICAiZm9udCI6ICJQb3BwaW5zIiwNCiAgICAgICAgICAgICJvcmRlciI6IDMsDQogICAgICAgICAgICAiY29vcmRpbmF0ZXMiOiB7DQogICAgICAgICAgICAgICAgIngiOiA1MCwNCiAgICAgICAgICAgICAgICAieSI6IDEyMA0KICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJzaXplIjogew0KICAgICAgICAgICAgICAgICJ3aWR0aCI6IDM1MCwNCiAgICAgICAgICAgICAgICAiaGVpZ2h0IjogNDANCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAibWF4Rm9udFNpemUiOiAyNSwNCiAgICAgICAgICAgICJhbGlnbiI6ICJsZWZ0IiwNCiAgICAgICAgICAgICJ0ZXh0Q29sb3IiOiB7DQogICAgICAgICAgICAgICAgInIiOiAwLA0KICAgICAgICAgICAgICAgICJnIjogMCwNCiAgICAgICAgICAgICAgICAiYiI6IDAsDQogICAgICAgICAgICAgICAgImEiOiAyNTUNCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAiYmFja2dyb3VuZCI6IHsNCiAgICAgICAgICAgICAgICAiciI6IDAsDQogICAgICAgICAgICAgICAgImciOiAwLA0KICAgICAgICAgICAgICAgICJiIjogMCwNCiAgICAgICAgICAgICAgICAiYSI6IDANCiAgICAgICAgICAgIH0NCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAiYWNoaWV2ZXIiLA0KICAgICAgICAgICAgInR5cGUiOiAidGV4dCIsDQogICAgICAgICAgICAiZm9udCI6ICJQb3BwaW5zIiwNCiAgICAgICAgICAgICJvcmRlciI6IDMsDQogICAgICAgICAgICAiY29vcmRpbmF0ZXMiOiB7DQogICAgICAgICAgICAgICAgIngiOiA1MCwNCiAgICAgICAgICAgICAgICAieSI6IDIyMA0KICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJzaXplIjogew0KICAgICAgICAgICAgICAgICJ3aWR0aCI6IDM1MCwNCiAgICAgICAgICAgICAgICAiaGVpZ2h0IjogNDANCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAibWF4Rm9udFNpemUiOiAyNSwNCiAgICAgICAgICAgICJhbGlnbiI6ICJsZWZ0IiwNCiAgICAgICAgICAgICJ0ZXh0Q29sb3IiOiB7DQogICAgICAgICAgICAgICAgInIiOiAwLA0KICAgICAgICAgICAgICAgICJnIjogMCwNCiAgICAgICAgICAgICAgICAiYiI6IDAsDQogICAgICAgICAgICAgICAgImEiOiAyNTUNCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAiYmFja2dyb3VuZCI6IHsNCiAgICAgICAgICAgICAgICAiciI6IDAsDQogICAgICAgICAgICAgICAgImciOiAwLA0KICAgICAgICAgICAgICAgICJiIjogMCwNCiAgICAgICAgICAgICAgICAiYSI6IDANCiAgICAgICAgICAgIH0NCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAidGl0bGUiLA0KICAgICAgICAgICAgInR5cGUiOiAidGV4dCIsDQogICAgICAgICAgICAiZm9udCI6ICJQb3BwaW5zIiwNCiAgICAgICAgICAgICJvcmRlciI6IDMsDQogICAgICAgICAgICAiY29vcmRpbmF0ZXMiOiB7DQogICAgICAgICAgICAgICAgIngiOiA1MCwNCiAgICAgICAgICAgICAgICAieSI6IDMyMA0KICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJzaXplIjogew0KICAgICAgICAgICAgICAgICJ3aWR0aCI6IDM1MCwNCiAgICAgICAgICAgICAgICAiaGVpZ2h0IjogNDANCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAibWF4Rm9udFNpemUiOiAyNSwNCiAgICAgICAgICAgICJhbGlnbiI6ICJsZWZ0IiwNCiAgICAgICAgICAgICJ0ZXh0Q29sb3IiOiB7DQogICAgICAgICAgICAgICAgInIiOiAwLA0KICAgICAgICAgICAgICAgICJnIjogMCwNCiAgICAgICAgICAgICAgICAiYiI6IDAsDQogICAgICAgICAgICAgICAgImEiOiAyNTUNCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAiYmFja2dyb3VuZCI6IHsNCiAgICAgICAgICAgICAgICAiciI6IDAsDQogICAgICAgICAgICAgICAgImciOiAwLA0KICAgICAgICAgICAgICAgICJiIjogMCwNCiAgICAgICAgICAgICAgICAiYSI6IDANCiAgICAgICAgICAgIH0NCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAiZGF0ZSIsDQogICAgICAgICAgICAidHlwZSI6ICJ0ZXh0IiwNCiAgICAgICAgICAgICJmb250IjogIlBvcHBpbnMiLA0KICAgICAgICAgICAgIm9yZGVyIjogMywNCiAgICAgICAgICAgICJjb29yZGluYXRlcyI6IHsNCiAgICAgICAgICAgICAgICAieCI6IDMxMCwNCiAgICAgICAgICAgICAgICAieSI6IDQyMA0KICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJzaXplIjogew0KICAgICAgICAgICAgICAgICJ3aWR0aCI6IDEyMCwNCiAgICAgICAgICAgICAgICAiaGVpZ2h0IjogNDANCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAibWF4Rm9udFNpemUiOiAxMiwNCiAgICAgICAgICAgICJhbGlnbiI6ICJsZWZ0IiwNCiAgICAgICAgICAgICJ0ZXh0Q29sb3IiOiB7DQogICAgICAgICAgICAgICAgInIiOiAwLA0KICAgICAgICAgICAgICAgICJnIjogMCwNCiAgICAgICAgICAgICAgICAiYiI6IDAsDQogICAgICAgICAgICAgICAgImEiOiAyNTUNCiAgICAgICAgICAgIH0sDQogICAgICAgICAgICAiYmFja2dyb3VuZCI6IHsNCiAgICAgICAgICAgICAgICAiciI6IDAsDQogICAgICAgICAgICAgICAgImciOiAwLA0KICAgICAgICAgICAgICAgICJiIjogMCwNCiAgICAgICAgICAgICAgICAiYSI6IDANCiAgICAgICAgICAgIH0NCiAgICAgICAgfQ0KICAgIF0sDQogICAgInBhcmFtcyI6IFsNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAibGFiZWw6cHJvdWRseSIsDQogICAgICAgICAgICAidmFsdWUiOiAiSXQgaXMgcGxlYXNlZCB0byBiZSBpc3N1ZWQgdG8gIg0KICAgICAgICB9LA0KICAgICAgICB7DQogICAgICAgICAgICAibmFtZSI6ICJsYWJlbDp0aXRsZSIsDQogICAgICAgICAgICAidmFsdWUiOiAiVGhlIHRpdGxlIG9mIg0KICAgICAgICB9LA0KICAgICAgICB7DQogICAgICAgICAgICAibmFtZSI6ICJsYWJlbDpkYXRlIiwNCiAgICAgICAgICAgICJ2YWx1ZSI6ICJTZW50IG9uOiINCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAiaW5zdGl0dXRpb24iLA0KICAgICAgICAgICAgInZhbHVlIjogIlNoeWFtIFFBIg0KICAgICAgICB9LA0KICAgICAgICB7DQogICAgICAgICAgICAibmFtZSI6ICJhY2hpZXZlciIsDQogICAgICAgICAgICAidmFsdWUiOiAiVmlub2QgQWxldGkiDQogICAgICAgIH0sDQogICAgICAgIHsNCiAgICAgICAgICAgICJuYW1lIjogInRpdGxlIiwNCiAgICAgICAgICAgICJ2YWx1ZSI6ICJDb3Vyc2UgQ29tcGxldGlvbiINCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAiZGF0ZSIsDQogICAgICAgICAgICAidmFsdWUiOiAiMTcwNjQ5NzIwMDAwMCINCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAibG9jYWxlIiwNCiAgICAgICAgICAgICJ2YWx1ZSI6ICJlbiINCiAgICAgICAgfSwNCiAgICAgICAgew0KICAgICAgICAgICAgIm5hbWUiOiAicXJjb2RlIiwNCiAgICAgICAgICAgICJ2YWx1ZSI6ICIiDQogICAgICAgIH0NCiAgICBdDQp9",
    "date":"1706497200000",
    "free":"true",
    "wallet":"0x8cd7c619a1685a1f6e991946af6295ca05210af7",
    "language_tag":"en"}
  ';
define('EMIT_DATA', $emitcertificatedata);
