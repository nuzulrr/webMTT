<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function dell_server()
    {
        return view('product.dell.server');
    }
    public function lenovo()
    {
        return view('product.lenovo.product_lenovo');
    }
    public function apc()
    {
        return view('product.apc.product_apc');
    }
    public function vmware()
    {
        return view('product.vmware.product_vmware');
    }
    public function sophos()
    {
        return view('product.sophos.product_sophos');
    }
    public function fortinet()
    {
        return view('product.fortinet.product_fortinet');
    }
    public function dlink()
    {
        return view('product.dlink.product_dlink');
    }
    public function edgecore()
    {
        return view('product.edgecore.product_edgecore');
    }
    public function aten()
    {
        return view('product.aten.product_aten');
    }
    public function synology()
    {
        return view('product.synology.product_synology');
    }
    public function qnap()
    {
        return view('product.qnap.product_qnap');
    }
    public function citrix()
    {
        return view('product.citrix.product_citrix');
    }
    public function vertiv()
    {
        return view('product.vertiv.product_vertiv');
    }
    public function mcafee()
    {
        return view('product.mcafee.product_mcafee');
    }
    public function alcatel()
    {
        return view('product.alcatel.product_alcatel');
    }
    public function cisco()
    {
        return view('product.cisco.product_cisco');
    }
    public function mikrotik()
    {
        return view('product.mikrotik.product_mikrotik');   
    }
    public function alliedtelesis()
    {
        return view('product.alliedtelesis.product_alliedtelesis');   
    }
    public function ubiquiti()
    {
        return view('product.ubiquiti.product_ubiquiti');   
    }
}
