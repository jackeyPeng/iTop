<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * @licence	http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

Dict::Add('HU HU', 'Hungarian', 'Magyar', array(
	'Class:Organization' => 'Szevezeti egység',
	'Class:Organization+' => '',
	'Class:Organization/Attribute:name' => 'Név',
	'Class:Organization/Attribute:name+' => '',
	'Class:Organization/Attribute:code' => 'Azonosító',
	'Class:Organization/Attribute:code+' => '',
	'Class:Organization/Attribute:status' => 'Státusz',
	'Class:Organization/Attribute:status+' => '',
	'Class:Organization/Attribute:status/Value:active' => 'Aktív',
	'Class:Organization/Attribute:status/Value:active+' => '',
	'Class:Organization/Attribute:status/Value:inactive' => 'Inaktív',
	'Class:Organization/Attribute:status/Value:inactive+' => '',
	'Class:Organization/Attribute:parent_id' => 'Felérendelt szervezeti egység',
	'Class:Organization/Attribute:parent_id+' => '',
	'Class:Location' => 'Helyszín',
	'Class:Location+' => '',
	'Class:Location/Attribute:name' => 'Név',
	'Class:Location/Attribute:name+' => '',
	'Class:Location/Attribute:status' => 'Státusz',
	'Class:Location/Attribute:status+' => '',
	'Class:Location/Attribute:status/Value:active' => 'Aktív',
	'Class:Location/Attribute:status/Value:active+' => '',
	'Class:Location/Attribute:status/Value:inactive' => 'Inaktív',
	'Class:Location/Attribute:status/Value:inactive+' => '',
	'Class:Location/Attribute:org_id' => 'Tulajdonos szevezeti egység',
	'Class:Location/Attribute:org_id+' => '',
	'Class:Location/Attribute:address' => 'Cím',
	'Class:Location/Attribute:address+' => '',
	'Class:Location/Attribute:postal_code' => 'Irányítószám',
	'Class:Location/Attribute:postal_code+' => '',
	'Class:Location/Attribute:city' => 'Város',
	'Class:Location/Attribute:city+' => '',
	'Class:Location/Attribute:country' => 'Ország',
	'Class:Location/Attribute:country+' => '',
	'Class:Location/Attribute:parent_id' => 'Felérendelt helyszín',
	'Class:Location/Attribute:parent_id+' => '',
	'Class:Location/Attribute:contact_list' => 'Kapcsolattartók',
	'Class:Location/Attribute:contact_list+' => '',
	'Class:Location/Attribute:infra_list' => 'Infrastruktúra',
	'Class:Location/Attribute:infra_list+' => '',
	'Class:Person' => 'Személy',
	'Class:Person+' => '',
	'Class:Person/Attribute:first_name' => 'Keresztnév',
	'Class:Person/Attribute:first_name+' => '',
	'Class:Person/Attribute:employee_id' => 'Alkalmazott azonosító',
	'Class:Person/Attribute:employee_id+' => '',
	'Class:Team' => 'Csoport',
	'Class:Team+' => '',
	'Class:Team/Attribute:member_list' => 'Tagok',
	'Class:Team/Attribute:member_list+' => '',
	'Class:lnkTeamToContact' => 'Csoport tagok',
	'Class:lnkTeamToContact+' => '',
	'Class:lnkTeamToContact/Attribute:team_id' => 'Csoport',
	'Class:lnkTeamToContact/Attribute:team_id+' => '',
	'Class:lnkTeamToContact/Attribute:contact_id' => 'Tag',
	'Class:lnkTeamToContact/Attribute:contact_id+' => '',
	'Class:lnkTeamToContact/Attribute:role' => 'Szerepkör',
	'Class:lnkTeamToContact/Attribute:role+' => '',
	'Class:WebDoc' => 'Weblap',
	'Class:WebDoc+' => '',
	'Class:WebDoc/Attribute:url' => 'Url',
	'Class:WebDoc/Attribute:url+' => '',
	'Class:Note' => 'Megjegyzés',
	'Class:Note+' => '',
	'Class:Note/Attribute:note' => 'Szöveg',
	'Class:Note/Attribute:note+' => '',
	'Class:FileDoc' => 'Dokumentum (fájl)',
	'Class:FileDoc+' => '',
	'Class:FileDoc/Attribute:contents' => 'Tartalom',
	'Class:FileDoc/Attribute:contents+' => '',
	'Class:Licence' => 'Liszensz',
	'Class:Licence+' => '',
	'Class:Licence/Attribute:provider' => 'Szállító',
	'Class:Licence/Attribute:provider+' => '',
	'Class:Licence/Attribute:org_id' => 'Tulajdonos',
	'Class:Licence/Attribute:org_id+' => '',
	'Class:Licence/Attribute:product' => 'Termék',
	'Class:Licence/Attribute:product+' => '',
	'Class:Licence/Attribute:name' => 'Név',
	'Class:Licence/Attribute:name+' => '',
	'Class:Licence/Attribute:start' => 'Érvényesség kezdete',
	'Class:Licence/Attribute:start+' => '',
	'Class:Licence/Attribute:end' => 'Érvényesség vége',
	'Class:Licence/Attribute:end+' => '',
	'Class:Licence/Attribute:licence_key' => 'Kulcs',
	'Class:Licence/Attribute:licence_key+' => '',
	'Class:Licence/Attribute:scope' => 'Tartalom',
	'Class:Licence/Attribute:scope+' => '',
	'Class:Licence/Attribute:usage_limit' => 'Felhasználási korlátok',
	'Class:Licence/Attribute:usage_limit+' => '',
	'Class:Licence/Attribute:usage_list' => 'Használók listája',
	'Class:Licence/Attribute:usage_list+' => '',
	'Class:Subnet' => 'Alhálózat',
	'Class:Subnet+' => '',
	'Class:Subnet/Attribute:description' => 'Leírás',
	'Class:Subnet/Attribute:description+' => '',
	'Class:Subnet/Attribute:org_id' => 'Tulajdonos szevezeti egység',
	'Class:Subnet/Attribute:org_id+' => '',
	'Class:Subnet/Attribute:ip' => 'IP',
	'Class:Subnet/Attribute:ip+' => '',
	'Class:Subnet/Attribute:ip_mask' => 'IP maszk',
	'Class:Subnet/Attribute:ip_mask+' => '',
	'Class:Patch' => 'Patch',
	'Class:Patch+' => '',
	'Class:Patch/Attribute:name' => 'Név',
	'Class:Patch/Attribute:name+' => '',
	'Class:Patch/Attribute:description' => 'Leírás',
	'Class:Patch/Attribute:description+' => '',
	'Class:Patch/Attribute:target_sw' => 'Célalkalmazás',
	'Class:Patch/Attribute:target_sw+' => '',
	'Class:Patch/Attribute:version' => 'Verzió',
	'Class:Patch/Attribute:version+' => '',
	'Class:Patch/Attribute:type' => 'Típus',
	'Class:Patch/Attribute:type+' => '',
	'Class:Patch/Attribute:type/Value:application' => 'Alkalmazás',
	'Class:Patch/Attribute:type/Value:application+' => '',
	'Class:Patch/Attribute:type/Value:os' => 'OS',
	'Class:Patch/Attribute:type/Value:os+' => '',
	'Class:Patch/Attribute:type/Value:security' => 'Biztonság',
	'Class:Patch/Attribute:type/Value:security+' => '',
	'Class:Patch/Attribute:type/Value:servicepack' => 'Service Pack',
	'Class:Patch/Attribute:type/Value:servicepack+' => '',
	'Class:Patch/Attribute:ci_list' => 'Eszközök',
	'Class:Patch/Attribute:ci_list+' => '',
	'Class:Application' => 'Alkalmazás',
	'Class:Application+' => '',
	'Class:Application/Attribute:instance_list' => 'Példányok',
	'Class:Application/Attribute:instance_list+' => '',
	'Class:DBServer' => 'Adatbázis',
	'Class:DBServer+' => '',
	'Class:DBServer/Attribute:instance_list' => 'Példányok',
	'Class:DBServer/Attribute:instance_list+' => '',
	'Class:lnkPatchToCI' => 'Frissítések',
	'Class:lnkPatchToCI+' => '',
	'Class:lnkPatchToCI/Attribute:patch_id' => 'Patch',
	'Class:lnkPatchToCI/Attribute:patch_id+' => '',
	'Class:lnkPatchToCI/Attribute:ci_id' => 'CI (konfigurációs elem)',
	'Class:lnkPatchToCI/Attribute:ci_id+' => '',
	'Class:DBServerInstance' => 'DB szerver példány',
	'Class:DBServerInstance+' => '',
	'Class:DBServerInstance/Attribute:software_id' => 'Szoftver',
	'Class:DBServerInstance/Attribute:software_id+' => '',
	'Class:DBServerInstance/Attribute:dbinstance_list' => 'Adatbázisok',
	'Class:DBServerInstance/Attribute:dbinstance_list+' => '',
	'Class:ApplicationInstance' => 'Alkalmazás példány',
	'Class:ApplicationInstance+' => '',
	'Class:ApplicationInstance/Attribute:software_id' => 'Szoftver',
	'Class:ApplicationInstance/Attribute:software_id+' => '',
	'Class:DatabaseInstance' => 'Adatbázis példány',
	'Class:DatabaseInstance+' => '',
	'Class:DatabaseInstance/Attribute:db_server_instance_id' => 'Adatbázis szerver',
	'Class:DatabaseInstance/Attribute:db_server_instance_id+' => '',
	'Class:DatabaseInstance/Attribute:description' => 'Leírás',
	'Class:DatabaseInstance/Attribute:description+' => '',
	'Class:Group' => 'Csoport',
	'Class:Group+' => '',
	'Class:Group/Attribute:name' => 'Név',
	'Class:Group/Attribute:name+' => '',
	'Class:Group/Attribute:status' => 'Státusz',
	'Class:Group/Attribute:status+' => '',
	'Class:Group/Attribute:status/Value:implementation' => 'Bevezetés alatt',
	'Class:Group/Attribute:status/Value:implementation+' => '',
	'Class:Group/Attribute:status/Value:obsolete' => 'Elavult',
	'Class:Group/Attribute:status/Value:obsolete+' => '',
	'Class:Group/Attribute:status/Value:production' => 'Éles üzemben',
	'Class:Group/Attribute:status/Value:production+' => '',
	'Class:Group/Attribute:org_id' => 'Szevezeti egység',
	'Class:Group/Attribute:org_id+' => '',
	'Class:Group/Attribute:description' => 'Leírás',
	'Class:Group/Attribute:description+' => '',
	'Class:Group/Attribute:type' => 'Típus',
	'Class:Group/Attribute:type+' => '',
	'Class:Group/Attribute:parent_id' => 'Felérendelt csoport',
	'Class:Group/Attribute:parent_id+' => '',
	'Class:Group/Attribute:ci_list' => 'Kapcsolódó CI-k',
	'Class:Group/Attribute:ci_list+' => '',
	'Class:lnkGroupToCI' => 'Csoport / CI',
	'Class:lnkGroupToCI+' => '',
	'Class:lnkGroupToCI/Attribute:group_id' => 'Csoport',
	'Class:lnkGroupToCI/Attribute:group_id+' => '',
	'Class:lnkGroupToCI/Attribute:ci_id' => 'CI',
	'Class:lnkGroupToCI/Attribute:ci_id+' => '',
	'Class:lnkGroupToCI/Attribute:reason' => 'Ok',
	'Class:lnkGroupToCI/Attribute:reason+' => '',
	'Class:ApplicationSolution' => 'Egyedi alkalmazás',
	'Class:ApplicationSolution+' => '',
	'Class:ApplicationSolution/Attribute:description' => 'Leírás',
	'Class:ApplicationSolution/Attribute:description+' => '',
	'Class:ApplicationSolution/Attribute:ci_list' => 'CI-k',
	'Class:ApplicationSolution/Attribute:ci_list+' => '',
	'Class:ApplicationSolution/Attribute:process_list' => 'Üzleti folyamatok',
	'Class:ApplicationSolution/Attribute:process_list+' => '',
	'Class:BusinessProcess' => 'Üzleti folyamat',
	'Class:BusinessProcess+' => '',
	'Class:BusinessProcess/Attribute:description' => 'Leírás',
	'Class:BusinessProcess/Attribute:description+' => '',
	'Class:BusinessProcess/Attribute:used_solution_list' => 'Egyedi alkalmazások',
	'Class:BusinessProcess/Attribute:used_solution_list+' => '',
	'Class:NetworkInterface' => 'Hálózati interfész',
	'Class:NetworkInterface+' => '',
	'Class:NetworkInterface/Attribute:device_id' => 'Eszköz',
	'Class:NetworkInterface/Attribute:device_id+' => '',
	'Class:NetworkInterface/Attribute:logical_type' => 'Logikai típus',
	'Class:NetworkInterface/Attribute:logical_type+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:backup' => 'Backup',
	'Class:NetworkInterface/Attribute:logical_type/Value:backup+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:logical' => 'Logiki',
	'Class:NetworkInterface/Attribute:logical_type/Value:logical+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:port' => 'Port',
	'Class:NetworkInterface/Attribute:logical_type/Value:port+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:primary' => 'Elsődleges',
	'Class:NetworkInterface/Attribute:logical_type/Value:primary+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:secondary' => 'Másodlagos',
	'Class:NetworkInterface/Attribute:logical_type/Value:secondary+' => '',
	'Class:NetworkInterface/Attribute:physical_type' => 'Fizikai típus',
	'Class:NetworkInterface/Attribute:physical_type+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:atm' => 'ATM',
	'Class:NetworkInterface/Attribute:physical_type/Value:atm+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:ethernet' => 'Ethernet',
	'Class:NetworkInterface/Attribute:physical_type/Value:ethernet+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:framerelay' => 'Frame Relay',
	'Class:NetworkInterface/Attribute:physical_type/Value:framerelay+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:vlan' => 'VLAN',
	'Class:NetworkInterface/Attribute:physical_type/Value:vlan+' => '',
	'Class:NetworkInterface/Attribute:ip_address' => 'IP Cím',
	'Class:NetworkInterface/Attribute:ip_address+' => '',
	'Class:NetworkInterface/Attribute:ip_mask' => 'IP maszk',
	'Class:NetworkInterface/Attribute:ip_mask+' => '',
	'Class:NetworkInterface/Attribute:mac_address' => 'MAC cím',
	'Class:NetworkInterface/Attribute:mac_address+' => '',
	'Class:NetworkInterface/Attribute:speed' => 'Sebesség',
	'Class:NetworkInterface/Attribute:speed+' => '',
	'Class:NetworkInterface/Attribute:duplex' => 'Duplex',
	'Class:NetworkInterface/Attribute:duplex+' => '',
	'Class:NetworkInterface/Attribute:duplex/Value:auto' => 'Auto',
	'Class:NetworkInterface/Attribute:duplex/Value:auto+' => '',
	'Class:NetworkInterface/Attribute:duplex/Value:full' => 'Full',
	'Class:NetworkInterface/Attribute:duplex/Value:full+' => '',
	'Class:NetworkInterface/Attribute:duplex/Value:half' => 'Half',
	'Class:NetworkInterface/Attribute:duplex/Value:half+' => '',
	'Class:NetworkInterface/Attribute:duplex/Value:unknown' => 'Ismeretlen',
	'Class:NetworkInterface/Attribute:duplex/Value:unknown+' => '',
	'Class:NetworkInterface/Attribute:connected_if' => 'Kapcsolatok',
	'Class:NetworkInterface/Attribute:connected_if+' => '',
	'Class:NetworkInterface/Attribute:link_type' => 'Kapcsolat típus',
	'Class:NetworkInterface/Attribute:link_type+' => '',
	'Class:NetworkInterface/Attribute:link_type/Value:downlink' => 'Down link',
	'Class:NetworkInterface/Attribute:link_type/Value:downlink+' => '',
	'Class:NetworkInterface/Attribute:link_type/Value:uplink' => 'Up link',
	'Class:NetworkInterface/Attribute:link_type/Value:uplink+' => '',
	'Class:PC' => 'PC',
	'Class:PC+' => '',
	'Class:PC/Attribute:cpu' => 'CPU',
	'Class:PC/Attribute:cpu+' => '',
	'Class:PC/Attribute:ram' => 'RAM',
	'Class:PC/Attribute:ram+' => '',
	'Class:PC/Attribute:hdd' => 'Merevlemez',
	'Class:PC/Attribute:hdd+' => '',
	'Class:PC/Attribute:os_family' => 'OS',
	'Class:PC/Attribute:os_family+' => '',
	'Class:PC/Attribute:os_version' => 'OS verzió',
	'Class:PC/Attribute:os_version+' => '',
	'Class:PC/Attribute:application_list' => 'Alkalmazások',
	'Class:PC/Attribute:application_list+' => '',
	'Class:PC/Attribute:patch_list' => 'Frissítések',
	'Class:PC/Attribute:patch_list+' => '',
	'Class:MobilePhone' => 'Mobil',
	'Class:MobilePhone+' => '',
	'Class:MobilePhone/Attribute:number' => 'Telefonszám',
	'Class:MobilePhone/Attribute:number+' => '',
	'Class:MobilePhone/Attribute:imei' => 'IMEI',
	'Class:MobilePhone/Attribute:imei+' => '',
	'Class:MobilePhone/Attribute:hw_pin' => 'PIN',
	'Class:MobilePhone/Attribute:hw_pin+' => '',
	'Class:NetworkDevice' => 'Hálózati eszköz',
	'Class:NetworkDevice+' => '',
	'Class:NetworkDevice/Attribute:type' => 'Típus',
	'Class:NetworkDevice/Attribute:type+' => '',
	'Class:NetworkDevice/Attribute:type/Value:firewall' => 'Firewall',
	'Class:NetworkDevice/Attribute:type/Value:firewall+' => '',
	'Class:NetworkDevice/Attribute:type/Value:hub' => 'Hub',
	'Class:NetworkDevice/Attribute:type/Value:hub+' => '',
	'Class:NetworkDevice/Attribute:type/Value:loadbalancer' => 'Load Balancer',
	'Class:NetworkDevice/Attribute:type/Value:loadbalancer+' => '',
	'Class:NetworkDevice/Attribute:type/Value:router' => 'Router',
	'Class:NetworkDevice/Attribute:type/Value:router+' => '',
	'Class:NetworkDevice/Attribute:type/Value:switch' => 'Switch',
	'Class:NetworkDevice/Attribute:type/Value:switch+' => '',
	'Class:NetworkDevice/Attribute:type/Value:wanaccelerator' => 'WAN Accelerator',
	'Class:NetworkDevice/Attribute:type/Value:wanaccelerator+' => '',
	'Class:NetworkDevice/Attribute:ios_version' => 'IOS verzió',
	'Class:NetworkDevice/Attribute:ios_version+' => '',
	'Class:NetworkDevice/Attribute:ram' => 'RAM',
	'Class:NetworkDevice/Attribute:ram+' => '',
	'Class:NetworkDevice/Attribute:snmp_read' => 'SNMP Read',
	'Class:NetworkDevice/Attribute:snmp_read+' => '',
	'Class:NetworkDevice/Attribute:snmp_write' => 'SNMP Write',
	'Class:NetworkDevice/Attribute:snmp_write+' => '',
	'Class:Server' => 'Szerver',
	'Class:Server+' => '',
	'Class:Server/Attribute:cpu' => 'CPU',
	'Class:Server/Attribute:cpu+' => '',
	'Class:Server/Attribute:ram' => 'RAM',
	'Class:Server/Attribute:ram+' => '',
	'Class:Server/Attribute:hdd' => 'Merevlemez',
	'Class:Server/Attribute:hdd+' => '',
	'Class:Server/Attribute:os_family' => 'OS',
	'Class:Server/Attribute:os_family+' => '',
	'Class:Server/Attribute:os_version' => 'OS verzió',
	'Class:Server/Attribute:os_version+' => '',
	'Class:Server/Attribute:application_list' => 'Alkalmazások',
	'Class:Server/Attribute:application_list+' => '',
	'Class:Server/Attribute:patch_list' => 'Frissítések',
	'Class:Server/Attribute:patch_list+' => '',
	'Class:Printer' => 'Nyomtató',
	'Class:Printer+' => '',
	'Class:Printer/Attribute:type' => 'Típus',
	'Class:Printer/Attribute:type+' => '',
	'Class:Printer/Attribute:type/Value:mopier' => 'Mopier',
	'Class:Printer/Attribute:type/Value:mopier+' => '',
	'Class:Printer/Attribute:type/Value:printer' => 'Nyomtató',
	'Class:Printer/Attribute:type/Value:printer+' => '',
	'Class:Printer/Attribute:technology' => 'Nyomtatási technológia',
	'Class:Printer/Attribute:technology+' => '',
	'Class:Printer/Attribute:technology/Value:inkjet' => 'Tintasugaras',
	'Class:Printer/Attribute:technology/Value:inkjet+' => '',
	'Class:Printer/Attribute:technology/Value:laser' => 'Lézer',
	'Class:Printer/Attribute:technology/Value:laser+' => '',
	'Class:Printer/Attribute:technology/Value:tracer' => 'Tracer',
	'Class:Printer/Attribute:technology/Value:tracer+' => '',
	'Class:lnkCIToDoc' => 'Dokomentum / CI',
	'Class:lnkCIToDoc+' => '',
	'Class:lnkCIToDoc/Attribute:ci_id' => 'CI',
	'Class:lnkCIToDoc/Attribute:ci_id+' => '',
	'Class:lnkCIToDoc/Attribute:document_id' => 'Documentum',
	'Class:lnkCIToDoc/Attribute:document_id+' => '',
	'Class:lnkCIToContact' => 'CI / Kapcsolattartó',
	'Class:lnkCIToContact+' => '',
	'Class:lnkCIToContact/Attribute:ci_id' => 'CI',
	'Class:lnkCIToContact/Attribute:ci_id+' => '',
	'Class:lnkCIToContact/Attribute:contact_id' => 'Kapcsolattartó',
	'Class:lnkCIToContact/Attribute:contact_id+' => '',
	'Class:lnkCIToContact/Attribute:role' => 'Szerepkör',
	'Class:lnkCIToContact/Attribute:role+' => '',
	'Class:lnkSolutionToCI' => 'CI / Megoldás',
	'Class:lnkSolutionToCI+' => '',
	'Class:lnkSolutionToCI/Attribute:solution_id' => 'Egyedi alkalmazás',
	'Class:lnkSolutionToCI/Attribute:solution_id+' => '',
	'Class:lnkSolutionToCI/Attribute:ci_id' => 'CI',
	'Class:lnkSolutionToCI/Attribute:ci_id+' => '',
	'Class:lnkSolutionToCI/Attribute:utility' => 'Utility',
	'Class:lnkSolutionToCI/Attribute:utility+' => '',
	'Class:lnkProcessToSolution' => 'Üzleti folyamat / Megoldás',
	'Class:lnkProcessToSolution+' => '',
	'Class:lnkProcessToSolution/Attribute:solution_id' => 'Egyedi alkalmazás',
	'Class:lnkProcessToSolution/Attribute:solution_id+' => '',
	'Class:lnkProcessToSolution/Attribute:process_id' => 'Folyamat',
	'Class:lnkProcessToSolution/Attribute:process_id+' => '',
	'Class:lnkProcessToSolution/Attribute:reason' => 'Ok',
	'Class:lnkProcessToSolution/Attribute:reason+' => '',
	'Relation:impacts/Description' => 'Konfigurációs elem működését befolyásolják',
	'Relation:impacts/VerbUp' => 'Hatás',
	'Relation:impacts/VerbDown' => 'Konfigurációs elem működését befolyásolják',
	'Relation:depends on/Description' => 'Konfigurációs elemtől függnek',
	'Relation:depends on/VerbUp' => 'Függőségek',
	'Relation:depends on/VerbDown' => 'Hatások',
	'Class:Organization/Attribute:parent_name' => 'Felérendelt szervezeti egység neve',
	'Class:Organization/Attribute:parent_name+' => '',
	'Class:Location/Attribute:org_name' => 'Tulejdonos szevezeti egység neve',
	'Class:Location/Attribute:org_name+' => '',
	'Class:Location/Attribute:parent_name' => 'Felérendelt neve',
	'Class:Location/Attribute:parent_name+' => '',
	'Class:Group/Attribute:owner_name' => 'Név',
	'Class:Group/Attribute:owner_name+' => '',
	'Class:Group/Attribute:parent_name' => 'Név',
	'Class:Group/Attribute:parent_name+' => '',
	'Class:lnkGroupToCI/Attribute:group_name' => 'Név',
	'Class:lnkGroupToCI/Attribute:group_name+' => '',
	'Class:lnkGroupToCI/Attribute:ci_name' => 'Név',
	'Class:lnkGroupToCI/Attribute:ci_name+' => '',
	'Class:lnkGroupToCI/Attribute:ci_status' => 'CI státusz',
	'Class:lnkGroupToCI/Attribute:ci_status+' => '',
	'Class:Contact' => 'Kapcsolattartó',
	'Class:Contact+' => '',
	'Class:Contact/Attribute:name' => 'Név',
	'Class:Contact/Attribute:name+' => '',
	'Class:Contact/Attribute:status' => 'Státusz',
	'Class:Contact/Attribute:status+' => '',
	'Class:Contact/Attribute:status/Value:active' => 'Aktív',
	'Class:Contact/Attribute:status/Value:active+' => '',
	'Class:Contact/Attribute:status/Value:inactive' => 'Inaktív',
	'Class:Contact/Attribute:status/Value:inactive+' => '',
	'Class:Contact/Attribute:org_id' => 'Szevezeti egység',
	'Class:Contact/Attribute:org_id+' => '',
	'Class:Contact/Attribute:org_name' => 'Szevezeti egység',
	'Class:Contact/Attribute:org_name+' => '',
	'Class:Contact/Attribute:email' => 'E-mail',
	'Class:Contact/Attribute:email+' => '',
	'Class:Contact/Attribute:phone' => 'Telefonszám',
	'Class:Contact/Attribute:phone+' => '',
	'Class:Contact/Attribute:location_id' => 'Helyszín',
	'Class:Contact/Attribute:location_id+' => '',
	'Class:Contact/Attribute:location_name' => 'Helyszín',
	'Class:Contact/Attribute:location_name+' => '',
	'Class:Contact/Attribute:ci_list' => 'CI-k',
	'Class:Contact/Attribute:ci_list+' => '',
	'Class:Contact/Attribute:contract_list' => 'Szerződések',
	'Class:Contact/Attribute:contract_list+' => '',
	'Class:Contact/Attribute:service_list' => 'Szolgáltatások',
	'Class:Contact/Attribute:service_list+' => '',
	'Class:Contact/Attribute:ticket_list' => 'Hibajegyek',
	'Class:Contact/Attribute:ticket_list+' => '',
	'Class:Contact/Attribute:team_list' => 'Csoportok',
	'Class:Contact/Attribute:team_list+' => '',
	'Class:Contact/Attribute:finalclass' => 'Típus',
	'Class:Contact/Attribute:finalclass+' => '',
	'Class:lnkTeamToContact/Attribute:contact_location_id' => 'Helyszín',
	'Class:lnkTeamToContact/Attribute:contact_location_id+' => '',
	'Class:lnkTeamToContact/Attribute:contact_email' => 'E-mail',
	'Class:lnkTeamToContact/Attribute:contact_email+' => '',
	'Class:lnkTeamToContact/Attribute:contact_phone' => 'Telefonszám',
	'Class:lnkTeamToContact/Attribute:contact_phone+' => '',
	'Class:Document' => 'Dokumentum',
	'Class:Document+' => '',
	'Class:Document/Attribute:name' => 'Név',
	'Class:Document/Attribute:name+' => '',
	'Class:Document/Attribute:org_id' => 'Szevezeti egység',
	'Class:Document/Attribute:description+' => '',
	'Class:Document/Attribute:org_name' => 'Szervezeti egység neve',
	'Class:Document/Attribute:org_name+' => '',
	'Class:Document/Attribute:description' => 'Leírás',
	'Class:Document/Attribute:type' => 'Típus',
	'Class:Document/Attribute:type+' => '',
	'Class:Document/Attribute:type/Value:contract' => 'Szerződés',
	'Class:Document/Attribute:type/Value:contract+' => '',
	'Class:Document/Attribute:type/Value:networkmap' => 'Hálózati térkép',
	'Class:Document/Attribute:type/Value:networkmap+' => '',
	'Class:Document/Attribute:type/Value:presentation' => 'Bemutató',
	'Class:Document/Attribute:type/Value:presentation+' => '',
	'Class:Document/Attribute:type/Value:training' => 'Okatatóanyag',
	'Class:Document/Attribute:type/Value:training+' => '',
	'Class:Document/Attribute:type/Value:whitePaper' => 'White Paper',
	'Class:Document/Attribute:type/Value:whitePaper+' => '',
	'Class:Document/Attribute:type/Value:workinginstructions' => 'Munkautasítsok',
	'Class:Document/Attribute:type/Value:workinginstructions+' => '',
	'Class:Document/Attribute:status' => 'Státusz',
	'Class:Document/Attribute:status+' => '',
	'Class:Document/Attribute:status/Value:draft' => 'Munkapéldány',
	'Class:Document/Attribute:status/Value:draft+' => '',
	'Class:Document/Attribute:status/Value:obsolete' => 'Elavult',
	'Class:Document/Attribute:status/Value:obsolete+' => '',
	'Class:Document/Attribute:status/Value:published' => 'Érvényes',
	'Class:Document/Attribute:status/Value:published+' => '',
	'Class:Document/Attribute:ci_list' => 'CI-k',
	'Class:Document/Attribute:ci_list+' => '',
	'Class:Document/Attribute:contract_list' => 'Szerződések',
	'Class:Document/Attribute:contract_list+' => '',
	'Class:Document/Attribute:service_list' => 'Szolgáltatások',
	'Class:Document/Attribute:service_list+' => '',
	'Class:Document/Attribute:ticket_list' => 'Hibajegyek',
	'Class:Document/Attribute:ticket_list+' => '',
	'Class:Document:PreviewTab' => 'Előnézet',
	'Class:Licence/Attribute:org_name' => 'Név',
	'Class:Licence/Attribute:org_name+' => '',
	'Class:Subnet/Name' => '%1$s / %2$s',
	'Class:Software' => 'Szoftver',
	'Class:Software+' => '',
	'Class:Software/Attribute:name' => 'Név',
	'Class:Software/Attribute:name+' => '',
	'Class:Software/Attribute:description' => 'Leírás',
	'Class:Software/Attribute:description+' => '',
	'Class:Software/Attribute:instance_list' => 'Telepítések',
	'Class:Software/Attribute:instance_list+' => '',
	'Class:Software/Attribute:finalclass' => 'Típus',
	'Class:Software/Attribute:finalclass+' => '',
	'Class:Application/Attribute:name' => 'Név',
	'Class:Application/Attribute:name+' => '',
	'Class:Application/Attribute:description' => 'Leírás',
	'Class:Application/Attribute:description+' => '',
	'Class:lnkPatchToCI/Attribute:patch_name' => 'Frissítés',
	'Class:lnkPatchToCI/Attribute:patch_name+' => '',
	'Class:lnkPatchToCI/Attribute:ci_name' => 'CI',
	'Class:lnkPatchToCI/Attribute:ci_name+' => '',
	'Class:lnkPatchToCI/Attribute:ci_status' => 'CI státusz',
	'Class:lnkPatchToCI/Attribute:ci_status+' => '',
	'Class:FunctionalCI' => 'Funkcionális CI',
	'Class:FunctionalCI+' => '',
	'Class:FunctionalCI/Attribute:name' => 'Név',
	'Class:FunctionalCI/Attribute:name+' => '',
	'Class:FunctionalCI/Attribute:status' => 'Státusz',
	'Class:FunctionalCI/Attribute:status+' => '',
	'Class:FunctionalCI/Attribute:status/Value:implementation' => 'Implementáció',
	'Class:FunctionalCI/Attribute:status/Value:implementation+' => '',
	'Class:FunctionalCI/Attribute:status/Value:obsolete' => 'Elavult',
	'Class:FunctionalCI/Attribute:status/Value:obsolete+' => '',
	'Class:FunctionalCI/Attribute:status/Value:production' => 'Éles üzemben',
	'Class:FunctionalCI/Attribute:status/Value:production+' => '',
	'Class:FunctionalCI/Attribute:org_id' => 'Tulajdonos szevezeti egység',
	'Class:FunctionalCI/Attribute:org_id+' => '',
	'Class:FunctionalCI/Attribute:owner_name' => 'Tulajdonos szevezeti egység',
	'Class:FunctionalCI/Attribute:owner_name+' => '',
	'Class:FunctionalCI/Attribute:importance' => 'Üzleti kritikusság',
	'Class:FunctionalCI/Attribute:importance+' => '',
	'Class:FunctionalCI/Attribute:importance/Value:high' => 'Magas',
	'Class:FunctionalCI/Attribute:importance/Value:high+' => '',
	'Class:FunctionalCI/Attribute:importance/Value:low' => 'Alacsony',
	'Class:FunctionalCI/Attribute:importance/Value:low+' => '',
	'Class:FunctionalCI/Attribute:importance/Value:medium' => 'Közepes',
	'Class:FunctionalCI/Attribute:importance/Value:medium+' => '',
	'Class:FunctionalCI/Attribute:contact_list' => 'Kapcsolattartók',
	'Class:FunctionalCI/Attribute:contact_list+' => '',
	'Class:FunctionalCI/Attribute:document_list' => 'Dokumentumok',
	'Class:FunctionalCI/Attribute:document_list+' => '',
	'Class:FunctionalCI/Attribute:solution_list' => 'Egyedi alkalmazások',
	'Class:FunctionalCI/Attribute:solution_list+' => '',
	'Class:FunctionalCI/Attribute:contract_list' => 'Szerződések',
	'Class:FunctionalCI/Attribute:contract_list+' => '',
	'Class:FunctionalCI/Attribute:ticket_list' => 'Hibajegyek',
	'Class:FunctionalCI/Attribute:ticket_list+' => '',
	'Class:FunctionalCI/Attribute:finalclass' => 'Típus',
	'Class:FunctionalCI/Attribute:finalclass+' => '',
	'Class:SoftwareInstance' => 'Szoftver példány',
	'Class:SoftwareInstance+' => '',
	'Class:SoftwareInstance/Name' => '%1$s - %2$s',
	'Class:SoftwareInstance/Attribute:device_id' => 'Eszköz',
	'Class:SoftwareInstance/Attribute:device_id+' => '',
	'Class:SoftwareInstance/Attribute:device_name' => 'Eszköz',
	'Class:SoftwareInstance/Attribute:device_name+' => '',
	'Class:SoftwareInstance/Attribute:licence_id' => 'Liszensz',
	'Class:SoftwareInstance/Attribute:licence_id+' => '',
	'Class:SoftwareInstance/Attribute:licence_name' => 'Liszensz',
	'Class:SoftwareInstance/Attribute:licence_name+' => '',
	'Class:SoftwareInstance/Attribute:software_name' => 'Szoftver',
	'Class:SoftwareInstance/Attribute:software_name+' => '',
	'Class:SoftwareInstance/Attribute:version' => 'Verzió',
	'Class:SoftwareInstance/Attribute:version+' => '',
	'Class:SoftwareInstance/Attribute:description' => 'Leírás',
	'Class:SoftwareInstance/Attribute:description+' => '',
	'Class:ApplicationInstance/Name' => '%1$s - %2$s',
	'Class:ApplicationInstance/Attribute:software_name' => 'Név',
	'Class:ApplicationInstance/Attribute:software_name+' => '',
	'Class:DBServerInstance/Name' => '%1$s - %2$s',
	'Class:DBServerInstance/Attribute:software_name' => 'Szoftver neve',
	'Class:DBServerInstance/Attribute:software_name+' => '',
	'Class:DatabaseInstance/Name' => '%1$s - %2$s',
	'Class:DatabaseInstance/Attribute:db_server_instance_version' => 'Adatbázis verzió',
	'Class:DatabaseInstance/Attribute:db_server_instance_version+' => '',
	'Class:ConnectableCI' => 'Kapcsoló CI',
	'Class:ConnectableCI+' => '',
	'Class:ConnectableCI/Attribute:brand' => 'Gyártó',
	'Class:ConnectableCI/Attribute:brand+' => '',
	'Class:ConnectableCI/Attribute:model' => 'Model',
	'Class:ConnectableCI/Attribute:model+' => '',
	'Class:ConnectableCI/Attribute:serial_number' => 'Sorozatszám',
	'Class:ConnectableCI/Attribute:serial_number+' => '',
	'Class:ConnectableCI/Attribute:asset_ref' => 'Asset hivatkozás',
	'Class:ConnectableCI/Attribute:asset_ref+' => '',
	'Class:NetworkInterface/Name' => '%1$s - %2$s',
	'Class:NetworkInterface/Attribute:device_name' => 'Eszköz',
	'Class:NetworkInterface/Attribute:device_name+' => '',
	'Class:NetworkInterface/Attribute:connected_name' => 'Kapcsolódik',
	'Class:NetworkInterface/Attribute:connected_name+' => '',
	'Class:NetworkInterface/Attribute:connected_if_device_id' => 'Kapcsolódó eszközök',
	'Class:NetworkInterface/Attribute:connected_if_device_id+' => '',
	'Class:NetworkInterface/Attribute:connected_if_device_id_name' => 'Eszköz',
	'Class:NetworkInterface/Attribute:connected_if_device_id_name+' => '',
	'Class:Device' => 'Eszköz',
	'Class:Device+' => '',
	'Class:Device/Attribute:nwinterface_list' => 'Hálózati interfész',
	'Class:Device/Attribute:nwinterface_list+' => '',
	'Class:MobileCI' => 'Mobil CI',
	'Class:MobileCI+' => '',
	'Class:InfrastructureCI' => 'Infrastruktúra CI',
	'Class:InfrastructureCI+' => '',
	'Class:InfrastructureCI/Attribute:description' => 'Leírás',
	'Class:InfrastructureCI/Attribute:description+' => '',
	'Class:InfrastructureCI/Attribute:location_id' => 'Helyszín',
	'Class:InfrastructureCI/Attribute:location_id+' => '',
	'Class:InfrastructureCI/Attribute:location_name' => 'Helyszín',
	'Class:InfrastructureCI/Attribute:location_name+' => '',
	'Class:InfrastructureCI/Attribute:location_details' => 'Helyszín részletek',
	'Class:InfrastructureCI/Attribute:location_details+' => '',
	'Class:InfrastructureCI/Attribute:management_ip' => 'Menedzsment IP',
	'Class:InfrastructureCI/Attribute:management_ip+' => '',
	'Class:InfrastructureCI/Attribute:default_gateway' => 'Alapértelmezett átjáró',
	'Class:InfrastructureCI/Attribute:default_gateway+' => '',
	'Class:lnkCIToDoc/Attribute:ci_name' => 'CI',
	'Class:lnkCIToDoc/Attribute:ci_name+' => '',
	'Class:lnkCIToDoc/Attribute:ci_status' => 'CI Státusz',
	'Class:lnkCIToDoc/Attribute:ci_status+' => '',
	'Class:lnkCIToDoc/Attribute:document_name' => 'Dokumentum',
	'Class:lnkCIToDoc/Attribute:document_name+' => '',
	'Class:lnkCIToDoc/Attribute:document_type' => 'Dokumentum típus',
	'Class:lnkCIToDoc/Attribute:document_type+' => '',
	'Class:lnkCIToDoc/Attribute:document_status' => 'Dokumentum státusz',
	'Class:lnkCIToDoc/Attribute:document_status+' => '',
	'Class:lnkCIToContact/Attribute:ci_name' => 'CI',
	'Class:lnkCIToContact/Attribute:ci_name+' => '',
	'Class:lnkCIToContact/Attribute:ci_status' => 'CI Státusz',
	'Class:lnkCIToContact/Attribute:ci_status+' => '',
	'Class:lnkCIToContact/Attribute:contact_name' => 'Kapcsolattartó',
	'Class:lnkCIToContact/Attribute:contact_name+' => '',
	'Class:lnkCIToContact/Attribute:contact_email' => 'E-mail',
	'Class:lnkCIToContact/Attribute:contact_email+' => '',
	'Class:lnkSolutionToCI/Attribute:solution_name' => 'Egyedi alkalmazás',
	'Class:lnkSolutionToCI/Attribute:solution_name+' => '',
	'Class:lnkSolutionToCI/Attribute:ci_name' => 'CI',
	'Class:lnkSolutionToCI/Attribute:ci_name+' => '',
	'Class:lnkSolutionToCI/Attribute:ci_status' => 'CI státusz',
	'Class:lnkSolutionToCI/Attribute:ci_status+' => '',
	'Class:lnkProcessToSolution/Attribute:solution_name' => 'Egyedi alkalmazás',
	'Class:lnkProcessToSolution/Attribute:solution_name+' => '',
	'Class:lnkProcessToSolution/Attribute:process_name' => 'Folyamat',
	'Class:lnkProcessToSolution/Attribute:process_name+' => '',
	'Class:Subnet/Tab:IPUsage' => 'IP felhasználás',
	'Class:Subnet/Tab:IPUsage-explain' => 'Interfészek a következő tartományba esnek: <em>%1$s</em> - <em>%2$s</em>',
	'Class:Subnet/Tab:FreeIPs' => 'Szabad IP-k',
	'Class:Subnet/Tab:FreeIPs-count' => 'Szabad IP-k: %1$s',
	'Class:Subnet/Tab:FreeIPs-explain' => '10 szabad IP cím kivonata',
	'Menu:Catalogs' => 'Katalógusok',
	'Menu:Catalogs+' => '',
	'Menu:Audit' => 'Audit',
	'Menu:Audit+' => '',
	'Menu:Organization' => 'Szervezet',
	'Menu:Organization+' => '',
	'Menu:Application' => 'Alkalmazások',
	'Menu:Application+' => '',
	'Menu:DBServer' => 'Adatbázis szerverek',
	'Menu:DBServer+' => '',
	'Menu:ConfigManagement' => 'Konfiguráció menedzsment',
	'Menu:ConfigManagement+' => '',
	'Menu:ConfigManagementOverview' => 'Áttekintő',
	'Menu:ConfigManagementOverview+' => '',
	'Menu:Contact' => 'Kapcsolattartók',
	'Menu:Contact+' => '',
	'Menu:Person' => 'Személyek',
	'Menu:Person+' => '',
	'Menu:Team' => 'Csoportok',
	'Menu:Team+' => '',
	'Menu:Document' => 'Dokumentumok',
	'Menu:Document+' => '',
	'Menu:Location' => 'Helyszínek',
	'Menu:Location+' => '',
	'Menu:ConfigManagementCI' => 'Konfigurációs elemek (CI)',
	'Menu:ConfigManagementCI+' => '',
	'Menu:BusinessProcess' => 'Üzleti folyamatok',
	'Menu:BusinessProcess+' => '',
	'Menu:ApplicationSolution' => 'Egyedi alkalmazások',
	'Menu:ApplicationSolution+' => '',
	'Menu:ConfigManagementSoftware' => 'Alkalmazás menedzsment',
	'Menu:Licence' => 'Liszenszek',
	'Menu:Licence+' => '',
	'Menu:Patch' => 'Frissítések',
	'Menu:Patch+' => '',
	'Menu:ApplicationInstance' => 'Telepített szoftverek',
	'Menu:ApplicationInstance+' => '',
	'Menu:ConfigManagementHardware' => 'Infrastruktúra menedzsment',
	'Menu:Subnet' => 'Alhálozatok',
	'Menu:Subnet+' => '',
	'Menu:NetworkDevice' => 'Hálózati eszközök',
	'Menu:NetworkDevice+' => '',
	'Menu:Server' => 'Szerverek',
	'Menu:Server+' => '',
	'Menu:Printer' => 'Nyomtatók',
	'Menu:Printer+' => '',
	'Menu:MobilePhone' => 'Mobil telefonok',
	'Menu:MobilePhone+' => '',
	'Menu:PC' => 'Személyi számítógépek',
	'Menu:PC+' => '',
	'Menu:NewContact' => 'Új kapcsolattartó',
	'Menu:NewContact+' => '',
	'Menu:SearchContacts' => 'Kapcsolattartó keresés',
	'Menu:SearchContacts+' => '',
	'Menu:NewCI' => 'Új CI',
	'Menu:NewCI+' => '',
	'Menu:SearchCIs' => 'CI keresés',
	'Menu:SearchCIs+' => '',
	'Menu:ConfigManagement:Devices' => 'Eszközök',
	'Menu:ConfigManagement:AllDevices' => 'Eszközök száma: %1$d',
	'Menu:ConfigManagement:SWAndApps' => 'Szoftverek és egyedi alkalmazások',
	'Menu:ConfigManagement:Misc' => 'Egyéb',
	'Menu:Group' => 'CI csoportok',
	'Menu:Group+' => '',
	'Menu:ConfigManagement:Shortcuts' => 'Gyorsmenük',
	'Menu:ConfigManagement:AllContacts' => 'Összes kapcsolattartó: %1$d',
));
?>