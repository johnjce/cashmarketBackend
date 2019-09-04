@extends('layouts.app')
@section('path')
<b>Listado de compras</b>
@endsection
@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
            <div class="table-responsive">
                <div id="tableUsers_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="tableUsers_length"><label>Mostrar <select name="tableUsers_length" aria-controls="tableUsers" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> registros</label></div><div id="tableUsers_filter" class="dataTables_filter"><label>Buscar:<input type="search" class="" placeholder="" aria-controls="tableUsers"></label></div><table id="tableUsers" class="table table-bordered dataTable no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="tableUsers_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="tableUsers" rowspan="1" colspan="1" aria-label="Cliente: Activar para ordenar la columna de manera ascendente" style="width: 243px;">Cliente</th><th class="sorting_asc" tabindex="0" aria-controls="tableUsers" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Fecha: Activar para ordenar la columna de manera descendente" style="width: 75px;">Fecha</th><th class="sorting" tabindex="0" aria-controls="tableUsers" rowspan="1" colspan="1" aria-label="Contrato: Activar para ordenar la columna de manera ascendente" style="width: 175px;">Contrato</th><th class="sorting" tabindex="0" aria-controls="tableUsers" rowspan="1" colspan="1" aria-label="Productos: Activar para ordenar la columna de manera ascendente" style="width: 302px;">Productos</th></tr>
                    </thead>
                    <tbody>
                                                    
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
    <tr role="row" class="odd">
                                <td>
                                    Roberto Carlos  Rodriguez Romero  -
                                    02297585T                                    <a href="index.php?controller=Customer&amp;action=updateCustomer&amp;id=1663" class="primary"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="sorting_1">
                                    01/07/2019 21:07                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Modaltqbp4jxD7K">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        tqbp4jxD7K                                    </a>
                                    <div class="modal fade" id="Modaltqbp4jxD7K" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contrato de Compra tqbp4jxD7K</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="Agreementtqbp4jxD7K">
                                                   <a class="sidebar-brand d-flex paddingModal" href="index.php" id="agreementLogo">
                                                        <div class="sidebar-brand-icon rotate-n-15">
                                                            <i class="fas fa-laugh-wink cLogo"></i>
                                                        </div>
                                                        <div class="sidebar-brand-text mx-7"><span class="mLogo">C</span>ash <span class="mLogo">M</span>arket</div>
                                                    </a>
                                                    <p>En Calle Ayala número 33 bajo,<br> Don Benito (Badajoz) <br>Movil: 	642 760 330 <br> Fijo: 	924 983 400 <br></p>
                                                    <p><strong>REUNIDOS A <strong>01/07/2019</strong></strong></p>
                                                    <p>
                                                        De una parte, Don
                                                        <strong><span class="textposition"> roberto carlos  rodriguez romero </span></strong>
                                                        mayor de edad, con domicilio en <strong>abenida constitucion 73   2º derecha </strong>,
                                                        con documento nacional de identidad número <strong>02297585t "VENDEDOR",</strong>
                                                        y de la otra parte, Don<strong> Cash Market</strong>, domiciliado en<strong> Calle Ayala número 33 bajo </strong> con NIF número <strong>34953215T, "COMPRADOR".</strong></p><br>
                                                    <p class="textposition">EXPONEN </p><br>
                                                    <p><span class="tex-parrafo2">I.-</span> Que (Don <strong><span class="textposition">roberto carlos  rodriguez romero </span></strong> /S.A., S.L., etc.) Con número de telefono <strong>604149383 </strong>es propietario de los <span class="tex-parrafo1">productos:<br><br>
                                                            </span></p><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3D3C2C">
                                                                <tbody><tr>
                                                                    <th></th>
                                                                    <th>Tipo</th>
                                                                    <th>Marca</th>
                                                                    <th>Modelo</th>
                                                                    <th>S/N</th>
                                                                    <th>Estado de<br>producto</th>
                                                                    <th>Precio unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                <tr>
                                                                                                                                            </tr><tr>
                                                                            <td>1</td>
                                                                            <td><img src="../views/assets/productTypes/1.png" width="35px" height="35px"></td>
                                                                            <td>etapa potencia  gelhard</td>
                                                                            <td>prestige gxv 366</td>
                                                                            <td>ge5166v 0100398</td>
                                                                            <td>Segunda mano</td>
                                                                            <td>15.00€</td>
                                                                            <td>1</td>
                                                                            <td>15€</td>
                                                                        </tr>
                                                                                                    
                    </tbody></table>
                    <br>(bienes objeto del contrato), por título de compraventa, por el cual se pagara la suma total de <strong>15€</strong><p></p>
                    <p><span class="tex-parrafo2">II.- </span>Que Don <strong>Cash Market </strong> tiene interés en adquirir los bienes descritos en el ordinal precedente.</p>
                    <p><span class="tex-parrafo2">III.- </span>Que por ello ambas partes,</p>
                    <p><strong>ACUERDAN </strong></p>
                    <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                    <p>Firmando en conformidad.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADGFbfiAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFNSURBVHhe7cGBAAAAAMOg+VNf4AhVAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABw14wQAAeg2tYEAAAAASUVORK5CYII=" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="./views/assets/img/firmaFernando.png" height="100px"></p>
                    <p>Parte vendedora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parte compradora </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="printAgreementButton" href="#" onclick="printDocument('Agreementtqbp4jxD7K')">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    </td>
    <td>
                        <img src="../views/assets/productTypes/1.png">
                etapa potencia  gelhard prestige gxv 366<br>
                </td>
    </tr><tr role="row" class="even">
                                <td>
                                    Roberto Carlos  Rodriguez Romero  -
                                    02297585T                                    <a href="index.php?controller=Customer&amp;action=updateCustomer&amp;id=1663" class="primary"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="sorting_1">
                                    01/07/2019 21:07                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalsWBOX38vz9">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        sWBOX38vz9                                    </a>
                                    <div class="modal fade" id="ModalsWBOX38vz9" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contrato de Compra sWBOX38vz9</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="AgreementsWBOX38vz9">
                                                   <a class="sidebar-brand d-flex paddingModal" href="index.php" id="agreementLogo">
                                                        <div class="sidebar-brand-icon rotate-n-15">
                                                            <i class="fas fa-laugh-wink cLogo"></i>
                                                        </div>
                                                        <div class="sidebar-brand-text mx-7"><span class="mLogo">C</span>ash <span class="mLogo">M</span>arket</div>
                                                    </a>
                                                    <p>En Calle Ayala número 33 bajo,<br> Don Benito (Badajoz) <br>Movil: 	642 760 330 <br> Fijo: 	924 983 400 <br></p>
                                                    <p><strong>REUNIDOS A <strong>01/07/2019</strong></strong></p>
                                                    <p>
                                                        De una parte, Don
                                                        <strong><span class="textposition"> roberto carlos  rodriguez romero </span></strong>
                                                        mayor de edad, con domicilio en <strong>abenida constitucion 73   2º derecha </strong>,
                                                        con documento nacional de identidad número <strong>02297585t "VENDEDOR",</strong>
                                                        y de la otra parte, Don<strong> Cash Market</strong>, domiciliado en<strong> Calle Ayala número 33 bajo </strong> con NIF número <strong>34953215T, "COMPRADOR".</strong></p><br>
                                                    <p class="textposition">EXPONEN </p><br>
                                                    <p><span class="tex-parrafo2">I.-</span> Que (Don <strong><span class="textposition">roberto carlos  rodriguez romero </span></strong> /S.A., S.L., etc.) Con número de telefono <strong>604149383 </strong>es propietario de los <span class="tex-parrafo1">productos:<br><br>
                                                            </span></p><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3D3C2C">
                                                                <tbody><tr>
                                                                    <th></th>
                                                                    <th>Tipo</th>
                                                                    <th>Marca</th>
                                                                    <th>Modelo</th>
                                                                    <th>S/N</th>
                                                                    <th>Estado de<br>producto</th>
                                                                    <th>Precio unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                <tr>
                                                                                                                                            <td>1</td>
                                                                        <td><img src="../views/assets/productTypes/.png"></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Segunda mano</td>
                                                                        <td>€</td>
                                                                        <td></td>
                                                                        <td>0€</td>
                                                                                                </tr>
                    </tbody></table>
                    <br>(bienes objeto del contrato), por título de compraventa, por el cual se pagara la suma total de <strong>0€</strong><p></p>
                    <p><span class="tex-parrafo2">II.- </span>Que Don <strong>Cash Market </strong> tiene interés en adquirir los bienes descritos en el ordinal precedente.</p>
                    <p><span class="tex-parrafo2">III.- </span>Que por ello ambas partes,</p>
                    <p><strong>ACUERDAN </strong></p>
                    <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                    <p>Firmando en conformidad.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADGFbfiAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFNSURBVHhe7cGBAAAAAMOg+VNf4AhVAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABw14wQAAeg2tYEAAAAASUVORK5CYII=" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="./views/assets/img/firmaFernando.png" height="100px"></p>
                    <p>Parte vendedora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parte compradora </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="printAgreementButton" href="#" onclick="printDocument('AgreementsWBOX38vz9')">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    </td>
    <td>
                    <img src="../views/assets/productTypes/.png">
                         </td>
    </tr><tr role="row" class="odd">
                                <td>
                                    Maria Teresa  Codina Aguilar  -
                                    39142327F                                    <a href="index.php?controller=Customer&amp;action=updateCustomer&amp;id=1712" class="primary"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="sorting_1">
                                    01/08/2019 13:08                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalOAPc7DdjsG">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        OAPc7DdjsG                                    </a>
                                    <div class="modal fade" id="ModalOAPc7DdjsG" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contrato de Compra OAPc7DdjsG</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="AgreementOAPc7DdjsG">
                                                   <a class="sidebar-brand d-flex paddingModal" href="index.php" id="agreementLogo">
                                                        <div class="sidebar-brand-icon rotate-n-15">
                                                            <i class="fas fa-laugh-wink cLogo"></i>
                                                        </div>
                                                        <div class="sidebar-brand-text mx-7"><span class="mLogo">C</span>ash <span class="mLogo">M</span>arket</div>
                                                    </a>
                                                    <p>En Calle Ayala número 33 bajo,<br> Don Benito (Badajoz) <br>Movil: 	642 760 330 <br> Fijo: 	924 983 400 <br></p>
                                                    <p><strong>REUNIDOS A <strong>01/08/2019</strong></strong></p>
                                                    <p>
                                                        De una parte, Don
                                                        <strong><span class="textposition"> maria teresa  codina aguilar </span></strong>
                                                        mayor de edad, con domicilio en <strong>avd constitucion 9 po1 a don benito badajoz </strong>,
                                                        con documento nacional de identidad número <strong>39142327f "VENDEDOR",</strong>
                                                        y de la otra parte, Don<strong> Cash Market</strong>, domiciliado en<strong> Calle Ayala número 33 bajo </strong> con NIF número <strong>34953215T, "COMPRADOR".</strong></p><br>
                                                    <p class="textposition">EXPONEN </p><br>
                                                    <p><span class="tex-parrafo2">I.-</span> Que (Don <strong><span class="textposition">maria teresa  codina aguilar </span></strong> /S.A., S.L., etc.) Con número de telefono <strong>661544094 </strong>es propietario de los <span class="tex-parrafo1">productos:<br><br>
                                                            </span></p><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3D3C2C">
                                                                <tbody><tr>
                                                                    <th></th>
                                                                    <th>Tipo</th>
                                                                    <th>Marca</th>
                                                                    <th>Modelo</th>
                                                                    <th>S/N</th>
                                                                    <th>Estado de<br>producto</th>
                                                                    <th>Precio unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                <tr>
                                                                                                                                            </tr><tr>
                                                                            <td>1</td>
                                                                            <td><img src="../views/assets/productTypes/10.png" width="35px" height="35px"></td>
                                                                            <td>maurice lacrois </td>
                                                                            <td>sh1018</td>
                                                                            <td>ag44998</td>
                                                                            <td>Segunda mano</td>
                                                                            <td>40.00€</td>
                                                                            <td>1</td>
                                                                            <td>40€</td>
                                                                        </tr>
                                                                                                    
                    </tbody></table>
                    <br>(bienes objeto del contrato), por título de compraventa, por el cual se pagara la suma total de <strong>40€</strong><p></p>
                    <p><span class="tex-parrafo2">II.- </span>Que Don <strong>Cash Market </strong> tiene interés en adquirir los bienes descritos en el ordinal precedente.</p>
                    <p><span class="tex-parrafo2">III.- </span>Que por ello ambas partes,</p>
                    <p><strong>ACUERDAN </strong></p>
                    <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                    <p>Firmando en conformidad.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADGFbfiAAABTUlEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDOMEAAHwsPujAAAAAElFTkSuQmCC" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="./views/assets/img/firmaFernando.png" height="100px"></p>
                    <p>Parte vendedora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parte compradora </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="printAgreementButton" href="#" onclick="printDocument('AgreementOAPc7DdjsG')">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    </td>
    <td>
                        <img src="../views/assets/productTypes/10.png">
                maurice lacrois  sh1018<br>
                </td>
    </tr><tr role="row" class="even">
                                <td>
                                    Roberto Carlos  Rodriguez Romero  -
                                    02297585T                                    <a href="index.php?controller=Customer&amp;action=updateCustomer&amp;id=1663" class="primary"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="sorting_1">
                                    02/07/2019 08:07                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Modaljyrcb37DJ5">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        jyrcb37DJ5                                    </a>
                                    <div class="modal fade" id="Modaljyrcb37DJ5" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contrato de Compra jyrcb37DJ5</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="Agreementjyrcb37DJ5">
                                                   <a class="sidebar-brand d-flex paddingModal" href="index.php" id="agreementLogo">
                                                        <div class="sidebar-brand-icon rotate-n-15">
                                                            <i class="fas fa-laugh-wink cLogo"></i>
                                                        </div>
                                                        <div class="sidebar-brand-text mx-7"><span class="mLogo">C</span>ash <span class="mLogo">M</span>arket</div>
                                                    </a>
                                                    <p>En Calle Ayala número 33 bajo,<br> Don Benito (Badajoz) <br>Movil: 	642 760 330 <br> Fijo: 	924 983 400 <br></p>
                                                    <p><strong>REUNIDOS A <strong>02/07/2019</strong></strong></p>
                                                    <p>
                                                        De una parte, Don
                                                        <strong><span class="textposition"> roberto carlos  rodriguez romero </span></strong>
                                                        mayor de edad, con domicilio en <strong>abenida constitucion 73   2º derecha </strong>,
                                                        con documento nacional de identidad número <strong>02297585t "VENDEDOR",</strong>
                                                        y de la otra parte, Don<strong> Cash Market</strong>, domiciliado en<strong> Calle Ayala número 33 bajo </strong> con NIF número <strong>34953215T, "COMPRADOR".</strong></p><br>
                                                    <p class="textposition">EXPONEN </p><br>
                                                    <p><span class="tex-parrafo2">I.-</span> Que (Don <strong><span class="textposition">roberto carlos  rodriguez romero </span></strong> /S.A., S.L., etc.) Con número de telefono <strong>604149383 </strong>es propietario de los <span class="tex-parrafo1">productos:<br><br>
                                                            </span></p><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3D3C2C">
                                                                <tbody><tr>
                                                                    <th></th>
                                                                    <th>Tipo</th>
                                                                    <th>Marca</th>
                                                                    <th>Modelo</th>
                                                                    <th>S/N</th>
                                                                    <th>Estado de<br>producto</th>
                                                                    <th>Precio unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                <tr>
                                                                                                                                            </tr><tr>
                                                                            <td>1</td>
                                                                            <td><img src="../views/assets/productTypes/15.png" width="35px" height="35px"></td>
                                                                            <td>alarma rfid</td>
                                                                            <td>gsm+wifi  alarm host</td>
                                                                            <td>4333m/1527/330k</td>
                                                                            <td>Segunda mano</td>
                                                                            <td>20.00€</td>
                                                                            <td>1</td>
                                                                            <td>20€</td>
                                                                        </tr>
                                                                                                                                                <tr>
                                                                            <td>2</td>
                                                                            <td><img src="../views/assets/productTypes/12.png" width="35px" height="35px"></td>
                                                                            <td>telefono telecon </td>
                                                                            <td>sd2200</td>
                                                                            <td>7129</td>
                                                                            <td>Segunda mano</td>
                                                                            <td>5.00€</td>
                                                                            <td>2</td>
                                                                            <td>10€</td>
                                                                        </tr>
                                                                                                    
                    </tbody></table>
                    <br>(bienes objeto del contrato), por título de compraventa, por el cual se pagara la suma total de <strong>30€</strong><p></p>
                    <p><span class="tex-parrafo2">II.- </span>Que Don <strong>Cash Market </strong> tiene interés en adquirir los bienes descritos en el ordinal precedente.</p>
                    <p><span class="tex-parrafo2">III.- </span>Que por ello ambas partes,</p>
                    <p><strong>ACUERDAN </strong></p>
                    <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                    <p>Firmando en conformidad.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADGFbfiAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFNSURBVHhe7cGBAAAAAMOg+VNf4AhVAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABw14wQAAeg2tYEAAAAASUVORK5CYII=" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="./views/assets/img/firmaFernando.png" height="100px"></p>
                    <p>Parte vendedora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parte compradora </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="printAgreementButton" href="#" onclick="printDocument('Agreementjyrcb37DJ5')">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    </td>
    <td>
                        <img src="../views/assets/productTypes/15.png">
                alarma rfid gsm+wifi  alarm host<br>
                            <img src="../views/assets/productTypes/12.png">
                telefono telecon  sd2200<br>
                </td>
    </tr><tr role="row" class="odd">
                                <td>
                                    Roberto Carlos  Rodriguez Romero  -
                                    02297585T                                    <a href="index.php?controller=Customer&amp;action=updateCustomer&amp;id=1663" class="primary"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="sorting_1">
                                    02/07/2019 08:07                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalS1jRAUPCI9">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        S1jRAUPCI9                                    </a>
                                    <div class="modal fade" id="ModalS1jRAUPCI9" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contrato de Compra S1jRAUPCI9</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="AgreementS1jRAUPCI9">
                                                   <a class="sidebar-brand d-flex paddingModal" href="index.php" id="agreementLogo">
                                                        <div class="sidebar-brand-icon rotate-n-15">
                                                            <i class="fas fa-laugh-wink cLogo"></i>
                                                        </div>
                                                        <div class="sidebar-brand-text mx-7"><span class="mLogo">C</span>ash <span class="mLogo">M</span>arket</div>
                                                    </a>
                                                    <p>En Calle Ayala número 33 bajo,<br> Don Benito (Badajoz) <br>Movil: 	642 760 330 <br> Fijo: 	924 983 400 <br></p>
                                                    <p><strong>REUNIDOS A <strong>02/07/2019</strong></strong></p>
                                                    <p>
                                                        De una parte, Don
                                                        <strong><span class="textposition"> roberto carlos  rodriguez romero </span></strong>
                                                        mayor de edad, con domicilio en <strong>abenida constitucion 73   2º derecha </strong>,
                                                        con documento nacional de identidad número <strong>02297585t "VENDEDOR",</strong>
                                                        y de la otra parte, Don<strong> Cash Market</strong>, domiciliado en<strong> Calle Ayala número 33 bajo </strong> con NIF número <strong>34953215T, "COMPRADOR".</strong></p><br>
                                                    <p class="textposition">EXPONEN </p><br>
                                                    <p><span class="tex-parrafo2">I.-</span> Que (Don <strong><span class="textposition">roberto carlos  rodriguez romero </span></strong> /S.A., S.L., etc.) Con número de telefono <strong>604149383 </strong>es propietario de los <span class="tex-parrafo1">productos:<br><br>
                                                            </span></p><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3D3C2C">
                                                                <tbody><tr>
                                                                    <th></th>
                                                                    <th>Tipo</th>
                                                                    <th>Marca</th>
                                                                    <th>Modelo</th>
                                                                    <th>S/N</th>
                                                                    <th>Estado de<br>producto</th>
                                                                    <th>Precio unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                <tr>
                                                                                                                                            </tr><tr>
                                                                            <td>1</td>
                                                                            <td><img src="../views/assets/productTypes/17.png" width="35px" height="35px"></td>
                                                                            <td>focos  led  20w </td>
                                                                            <td>alvertlamp</td>
                                                                            <td>alv102016nh</td>
                                                                            <td>Nuevo</td>
                                                                            <td>15.00€</td>
                                                                            <td>1</td>
                                                                            <td>15€</td>
                                                                        </tr>
                                                                                                    
                    </tbody></table>
                    <br>(bienes objeto del contrato), por título de compraventa, por el cual se pagara la suma total de <strong>15€</strong><p></p>
                    <p><span class="tex-parrafo2">II.- </span>Que Don <strong>Cash Market </strong> tiene interés en adquirir los bienes descritos en el ordinal precedente.</p>
                    <p><span class="tex-parrafo2">III.- </span>Que por ello ambas partes,</p>
                    <p><strong>ACUERDAN </strong></p>
                    <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                    <p>Firmando en conformidad.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADGFbfiAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFNSURBVHhe7cGBAAAAAMOg+VNf4AhVAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABw14wQAAeg2tYEAAAAASUVORK5CYII=" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="./views/assets/img/firmaFernando.png" height="100px"></p>
                    <p>Parte vendedora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parte compradora </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="printAgreementButton" href="#" onclick="printDocument('AgreementS1jRAUPCI9')">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    </td>
    <td>
                        <img src="../views/assets/productTypes/17.png">
                focos  led  20w  alvertlamp<br>
                </td>
    </tr><tr role="row" class="even">
                                <td>
                                    Rosa Maria  Diaz Mena  -
                                    53263003                                    <a href="index.php?controller=Customer&amp;action=updateCustomer&amp;id=1665" class="primary"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="sorting_1">
                                    02/07/2019 18:07                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalWP9LQ1ZC7T">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        WP9LQ1ZC7T                                    </a>
                                    <div class="modal fade" id="ModalWP9LQ1ZC7T" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contrato de Compra WP9LQ1ZC7T</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="AgreementWP9LQ1ZC7T">
                                                   <a class="sidebar-brand d-flex paddingModal" href="index.php" id="agreementLogo">
                                                        <div class="sidebar-brand-icon rotate-n-15">
                                                            <i class="fas fa-laugh-wink cLogo"></i>
                                                        </div>
                                                        <div class="sidebar-brand-text mx-7"><span class="mLogo">C</span>ash <span class="mLogo">M</span>arket</div>
                                                    </a>
                                                    <p>En Calle Ayala número 33 bajo,<br> Don Benito (Badajoz) <br>Movil: 	642 760 330 <br> Fijo: 	924 983 400 <br></p>
                                                    <p><strong>REUNIDOS A <strong>02/07/2019</strong></strong></p>
                                                    <p>
                                                        De una parte, Don
                                                        <strong><span class="textposition"> rosa maria  diaz mena </span></strong>
                                                        mayor de edad, con domicilio en <strong>italia 89</strong>,
                                                        con documento nacional de identidad número <strong>53263003 "VENDEDOR",</strong>
                                                        y de la otra parte, Don<strong> Cash Market</strong>, domiciliado en<strong> Calle Ayala número 33 bajo </strong> con NIF número <strong>34953215T, "COMPRADOR".</strong></p><br>
                                                    <p class="textposition">EXPONEN </p><br>
                                                    <p><span class="tex-parrafo2">I.-</span> Que (Don <strong><span class="textposition">rosa maria  diaz mena </span></strong> /S.A., S.L., etc.) Con número de telefono <strong>605033299 </strong>es propietario de los <span class="tex-parrafo1">productos:<br><br>
                                                            </span></p><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3D3C2C">
                                                                <tbody><tr>
                                                                    <th></th>
                                                                    <th>Tipo</th>
                                                                    <th>Marca</th>
                                                                    <th>Modelo</th>
                                                                    <th>S/N</th>
                                                                    <th>Estado de<br>producto</th>
                                                                    <th>Precio unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                <tr>
                                                                                                                                            </tr><tr>
                                                                            <td>1</td>
                                                                            <td><img src="../views/assets/productTypes/19.png" width="35px" height="35px"></td>
                                                                            <td>cajon monedas </td>
                                                                            <td>seipos </td>
                                                                            <td>160507049188</td>
                                                                            <td>Segunda mano</td>
                                                                            <td>20.00€</td>
                                                                            <td>1</td>
                                                                            <td>20€</td>
                                                                        </tr>
                                                                                                    
                    </tbody></table>
                    <br>(bienes objeto del contrato), por título de compraventa, por el cual se pagara la suma total de <strong>20€</strong><p></p>
                    <p><span class="tex-parrafo2">II.- </span>Que Don <strong>Cash Market </strong> tiene interés en adquirir los bienes descritos en el ordinal precedente.</p>
                    <p><span class="tex-parrafo2">III.- </span>Que por ello ambas partes,</p>
                    <p><strong>ACUERDAN </strong></p>
                    <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                    <p>Firmando en conformidad.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADGFbfiAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFNSURBVHhe7cGBAAAAAMOg+VNf4AhVAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABw14wQAAeg2tYEAAAAASUVORK5CYII=" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="./views/assets/img/firmaFernando.png" height="100px"></p>
                    <p>Parte vendedora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parte compradora </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="printAgreementButton" href="#" onclick="printDocument('AgreementWP9LQ1ZC7T')">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    </td>
    <td>
                        <img src="../views/assets/productTypes/19.png">
                cajon monedas  seipos <br>
                </td>
    </tr><tr role="row" class="odd">
                                <td>
                                    Rosa Maria  Diaz Mena  -
                                    53263003                                    <a href="index.php?controller=Customer&amp;action=updateCustomer&amp;id=1665" class="primary"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="sorting_1">
                                    02/07/2019 19:07                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalhGlid6aKfk">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        hGlid6aKfk                                    </a>
                                    <div class="modal fade" id="ModalhGlid6aKfk" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contrato de Compra hGlid6aKfk</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="AgreementhGlid6aKfk">
                                                   <a class="sidebar-brand d-flex paddingModal" href="index.php" id="agreementLogo">
                                                        <div class="sidebar-brand-icon rotate-n-15">
                                                            <i class="fas fa-laugh-wink cLogo"></i>
                                                        </div>
                                                        <div class="sidebar-brand-text mx-7"><span class="mLogo">C</span>ash <span class="mLogo">M</span>arket</div>
                                                    </a>
                                                    <p>En Calle Ayala número 33 bajo,<br> Don Benito (Badajoz) <br>Movil: 	642 760 330 <br> Fijo: 	924 983 400 <br></p>
                                                    <p><strong>REUNIDOS A <strong>02/07/2019</strong></strong></p>
                                                    <p>
                                                        De una parte, Don
                                                        <strong><span class="textposition"> rosa maria  diaz mena </span></strong>
                                                        mayor de edad, con domicilio en <strong>italia 89</strong>,
                                                        con documento nacional de identidad número <strong>53263003 "VENDEDOR",</strong>
                                                        y de la otra parte, Don<strong> Cash Market</strong>, domiciliado en<strong> Calle Ayala número 33 bajo </strong> con NIF número <strong>34953215T, "COMPRADOR".</strong></p><br>
                                                    <p class="textposition">EXPONEN </p><br>
                                                    <p><span class="tex-parrafo2">I.-</span> Que (Don <strong><span class="textposition">rosa maria  diaz mena </span></strong> /S.A., S.L., etc.) Con número de telefono <strong>605033299 </strong>es propietario de los <span class="tex-parrafo1">productos:<br><br>
                                                            </span></p><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3D3C2C">
                                                                <tbody><tr>
                                                                    <th></th>
                                                                    <th>Tipo</th>
                                                                    <th>Marca</th>
                                                                    <th>Modelo</th>
                                                                    <th>S/N</th>
                                                                    <th>Estado de<br>producto</th>
                                                                    <th>Precio unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                <tr>
                                                                                                                                            </tr><tr>
                                                                            <td>1</td>
                                                                            <td><img src="../views/assets/productTypes/1.png" width="35px" height="35px"></td>
                                                                            <td>barcode approx </td>
                                                                            <td>appls00</td>
                                                                            <td>1600700</td>
                                                                            <td>Segunda mano</td>
                                                                            <td>10.00€</td>
                                                                            <td>1</td>
                                                                            <td>10€</td>
                                                                        </tr>
                                                                                                                                                <tr>
                                                                            <td>2</td>
                                                                            <td><img src="../views/assets/productTypes/19.png" width="35px" height="35px"></td>
                                                                            <td>impresora 10pos </td>
                                                                            <td>rp-10n</td>
                                                                            <td>201603150636</td>
                                                                            <td>Segunda mano</td>
                                                                            <td>50.00€</td>
                                                                            <td>1</td>
                                                                            <td>50€</td>
                                                                        </tr>
                                                                                                    
                    </tbody></table>
                    <br>(bienes objeto del contrato), por título de compraventa, por el cual se pagara la suma total de <strong>60€</strong><p></p>
                    <p><span class="tex-parrafo2">II.- </span>Que Don <strong>Cash Market </strong> tiene interés en adquirir los bienes descritos en el ordinal precedente.</p>
                    <p><span class="tex-parrafo2">III.- </span>Que por ello ambas partes,</p>
                    <p><strong>ACUERDAN </strong></p>
                    <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                    <p>Firmando en conformidad.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADGFbfiAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFNSURBVHhe7cGBAAAAAMOg+VNf4AhVAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABw14wQAAeg2tYEAAAAASUVORK5CYII=" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="./views/assets/img/firmaFernando.png" height="100px"></p>
                    <p>Parte vendedora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parte compradora </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="printAgreementButton" href="#" onclick="printDocument('AgreementhGlid6aKfk')">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    </td>
    <td>
                        <img src="../views/assets/productTypes/1.png">
                barcode approx  appls00<br>
                            <img src="../views/assets/productTypes/19.png">
                impresora 10pos  rp-10n<br>
                </td>
    </tr><tr role="row" class="even">
                                <td>
                                    Bernardo  Manzano Fernandez -
                                    52969728S                                    <a href="index.php?controller=Customer&amp;action=updateCustomer&amp;id=1666" class="primary"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="sorting_1">
                                    02/07/2019 20:07                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalJtiN75Y8nl">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        JtiN75Y8nl                                    </a>
                                    <div class="modal fade" id="ModalJtiN75Y8nl" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contrato de Compra JtiN75Y8nl</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="AgreementJtiN75Y8nl">
                                                   <a class="sidebar-brand d-flex paddingModal" href="index.php" id="agreementLogo">
                                                        <div class="sidebar-brand-icon rotate-n-15">
                                                            <i class="fas fa-laugh-wink cLogo"></i>
                                                        </div>
                                                        <div class="sidebar-brand-text mx-7"><span class="mLogo">C</span>ash <span class="mLogo">M</span>arket</div>
                                                    </a>
                                                    <p>En Calle Ayala número 33 bajo,<br> Don Benito (Badajoz) <br>Movil: 	642 760 330 <br> Fijo: 	924 983 400 <br></p>
                                                    <p><strong>REUNIDOS A <strong>02/07/2019</strong></strong></p>
                                                    <p>
                                                        De una parte, Don
                                                        <strong><span class="textposition"> bernardo  manzano fernandez</span></strong>
                                                        mayor de edad, con domicilio en <strong>rios 8 pbj</strong>,
                                                        con documento nacional de identidad número <strong>52969728s "VENDEDOR",</strong>
                                                        y de la otra parte, Don<strong> Cash Market</strong>, domiciliado en<strong> Calle Ayala número 33 bajo </strong> con NIF número <strong>34953215T, "COMPRADOR".</strong></p><br>
                                                    <p class="textposition">EXPONEN </p><br>
                                                    <p><span class="tex-parrafo2">I.-</span> Que (Don <strong><span class="textposition">bernardo  manzano fernandez</span></strong> /S.A., S.L., etc.) Con número de telefono <strong>642159107 </strong>es propietario de los <span class="tex-parrafo1">productos:<br><br>
                                                            </span></p><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3D3C2C">
                                                                <tbody><tr>
                                                                    <th></th>
                                                                    <th>Tipo</th>
                                                                    <th>Marca</th>
                                                                    <th>Modelo</th>
                                                                    <th>S/N</th>
                                                                    <th>Estado de<br>producto</th>
                                                                    <th>Precio unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                <tr>
                                                                                                                                            </tr><tr>
                                                                            <td>1</td>
                                                                            <td><img src="../views/assets/productTypes/5.png" width="35px" height="35px"></td>
                                                                            <td>genyx</td>
                                                                            <td>g800-2</td>
                                                                            <td>ip23m-bj2012</td>
                                                                            <td>Segunda mano</td>
                                                                            <td>40.00€</td>
                                                                            <td>1</td>
                                                                            <td>40€</td>
                                                                        </tr>
                                                                                                    
                    </tbody></table>
                    <br>(bienes objeto del contrato), por título de compraventa, por el cual se pagara la suma total de <strong>40€</strong><p></p>
                    <p><span class="tex-parrafo2">II.- </span>Que Don <strong>Cash Market </strong> tiene interés en adquirir los bienes descritos en el ordinal precedente.</p>
                    <p><span class="tex-parrafo2">III.- </span>Que por ello ambas partes,</p>
                    <p><strong>ACUERDAN </strong></p>
                    <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                    <p>Firmando en conformidad.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADGFbfiAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFNSURBVHhe7cGBAAAAAMOg+VNf4AhVAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABw14wQAAeg2tYEAAAAASUVORK5CYII=" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="./views/assets/img/firmaFernando.png" height="100px"></p>
                    <p>Parte vendedora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parte compradora </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="printAgreementButton" href="#" onclick="printDocument('AgreementJtiN75Y8nl')">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    </td>
    <td>
                        <img src="../views/assets/productTypes/5.png">
                genyx g800-2<br>
                </td>
    </tr><tr role="row" class="odd">
                                <td>
                                    Jose Mauel  Sosa Morcillo -
                                    33981796D                                    <a href="index.php?controller=Customer&amp;action=updateCustomer&amp;id=1713" class="primary"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="sorting_1">
                                    02/08/2019 12:08                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalK0bw4Stnxa">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        K0bw4Stnxa                                    </a>
                                    <div class="modal fade" id="ModalK0bw4Stnxa" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contrato de Compra K0bw4Stnxa</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="AgreementK0bw4Stnxa">
                                                   <a class="sidebar-brand d-flex paddingModal" href="index.php" id="agreementLogo">
                                                        <div class="sidebar-brand-icon rotate-n-15">
                                                            <i class="fas fa-laugh-wink cLogo"></i>
                                                        </div>
                                                        <div class="sidebar-brand-text mx-7"><span class="mLogo">C</span>ash <span class="mLogo">M</span>arket</div>
                                                    </a>
                                                    <p>En Calle Ayala número 33 bajo,<br> Don Benito (Badajoz) <br>Movil: 	642 760 330 <br> Fijo: 	924 983 400 <br></p>
                                                    <p><strong>REUNIDOS A <strong>02/08/2019</strong></strong></p>
                                                    <p>
                                                        De una parte, Don
                                                        <strong><span class="textposition"> jose mauel  sosa morcillo</span></strong>
                                                        mayor de edad, con domicilio en <strong>c/ guadanez 52 pbj </strong>,
                                                        con documento nacional de identidad número <strong>33981796d "VENDEDOR",</strong>
                                                        y de la otra parte, Don<strong> Cash Market</strong>, domiciliado en<strong> Calle Ayala número 33 bajo </strong> con NIF número <strong>34953215T, "COMPRADOR".</strong></p><br>
                                                    <p class="textposition">EXPONEN </p><br>
                                                    <p><span class="tex-parrafo2">I.-</span> Que (Don <strong><span class="textposition">jose mauel  sosa morcillo</span></strong> /S.A., S.L., etc.) Con número de telefono <strong>685647566 </strong>es propietario de los <span class="tex-parrafo1">productos:<br><br>
                                                            </span></p><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3D3C2C">
                                                                <tbody><tr>
                                                                    <th></th>
                                                                    <th>Tipo</th>
                                                                    <th>Marca</th>
                                                                    <th>Modelo</th>
                                                                    <th>S/N</th>
                                                                    <th>Estado de<br>producto</th>
                                                                    <th>Precio unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                <tr>
                                                                                                                                            </tr><tr>
                                                                            <td>1</td>
                                                                            <td><img src="../views/assets/productTypes/7.png" width="35px" height="35px"></td>
                                                                            <td>rox giant inside </td>
                                                                            <td>gigant inside </td>
                                                                            <td>pbrx1b</td>
                                                                            <td>Segunda mano</td>
                                                                            <td>25.00€</td>
                                                                            <td>1</td>
                                                                            <td>25€</td>
                                                                        </tr>
                                                                                                    
                    </tbody></table>
                    <br>(bienes objeto del contrato), por título de compraventa, por el cual se pagara la suma total de <strong>25€</strong><p></p>
                    <p><span class="tex-parrafo2">II.- </span>Que Don <strong>Cash Market </strong> tiene interés en adquirir los bienes descritos en el ordinal precedente.</p>
                    <p><span class="tex-parrafo2">III.- </span>Que por ello ambas partes,</p>
                    <p><strong>ACUERDAN </strong></p>
                    <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                    <p>Firmando en conformidad.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADGFbfiAAABTUlEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDOMEAAHwsPujAAAAAElFTkSuQmCC" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="./views/assets/img/firmaFernando.png" height="100px"></p>
                    <p>Parte vendedora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parte compradora </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="printAgreementButton" href="#" onclick="printDocument('AgreementK0bw4Stnxa')">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    </td>
    <td>
                        <img src="../views/assets/productTypes/7.png">
                rox giant inside  gigant inside <br>
                </td>
    </tr><tr role="row" class="even">
                                <td>
                                    Maria Consuelo  Martinez Quintana  -
                                    52961578F                                    <a href="index.php?controller=Customer&amp;action=updateCustomer&amp;id=1714" class="primary"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="sorting_1">
                                    02/08/2019 12:08                                </td>
                                <td>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Modala45mes06Y2">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        a45mes06Y2                                    </a>
                                    <div class="modal fade" id="Modala45mes06Y2" tabindex="-1" role="dialog" aria-labelledby="modalAgreementPurchase" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Contrato de Compra a45mes06Y2</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="Agreementa45mes06Y2">
                                                   <a class="sidebar-brand d-flex paddingModal" href="index.php" id="agreementLogo">
                                                        <div class="sidebar-brand-icon rotate-n-15">
                                                            <i class="fas fa-laugh-wink cLogo"></i>
                                                        </div>
                                                        <div class="sidebar-brand-text mx-7"><span class="mLogo">C</span>ash <span class="mLogo">M</span>arket</div>
                                                    </a>
                                                    <p>En Calle Ayala número 33 bajo,<br> Don Benito (Badajoz) <br>Movil: 	642 760 330 <br> Fijo: 	924 983 400 <br></p>
                                                    <p><strong>REUNIDOS A <strong>02/08/2019</strong></strong></p>
                                                    <p>
                                                        De una parte, Don
                                                        <strong><span class="textposition"> maria consuelo  martinez quintana </span></strong>
                                                        mayor de edad, con domicilio en <strong>avd madrid 11 pbo 3 d</strong>,
                                                        con documento nacional de identidad número <strong>52961578f "VENDEDOR",</strong>
                                                        y de la otra parte, Don<strong> Cash Market</strong>, domiciliado en<strong> Calle Ayala número 33 bajo </strong> con NIF número <strong>34953215T, "COMPRADOR".</strong></p><br>
                                                    <p class="textposition">EXPONEN </p><br>
                                                    <p><span class="tex-parrafo2">I.-</span> Que (Don <strong><span class="textposition">maria consuelo  martinez quintana </span></strong> /S.A., S.L., etc.) Con número de telefono <strong>635409286 </strong>es propietario de los <span class="tex-parrafo1">productos:<br><br>
                                                            </span></p><table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3D3C2C">
                                                                <tbody><tr>
                                                                    <th></th>
                                                                    <th>Tipo</th>
                                                                    <th>Marca</th>
                                                                    <th>Modelo</th>
                                                                    <th>S/N</th>
                                                                    <th>Estado de<br>producto</th>
                                                                    <th>Precio unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                <tr>
                                                                                                                                            </tr><tr>
                                                                            <td>1</td>
                                                                            <td><img src="../views/assets/productTypes/4.png" width="35px" height="35px"></td>
                                                                            <td>patinete</td>
                                                                            <td>s-cooter </td>
                                                                            <td>c7514120</td>
                                                                            <td>Segunda mano</td>
                                                                            <td>30.00€</td>
                                                                            <td>1</td>
                                                                            <td>30€</td>
                                                                        </tr>
                                                                                                    
                    </tbody></table>
                    <br>(bienes objeto del contrato), por título de compraventa, por el cual se pagara la suma total de <strong>30€</strong><p></p>
                    <p><span class="tex-parrafo2">II.- </span>Que Don <strong>Cash Market </strong> tiene interés en adquirir los bienes descritos en el ordinal precedente.</p>
                    <p><span class="tex-parrafo2">III.- </span>Que por ello ambas partes,</p>
                    <p><strong>ACUERDAN </strong></p>
                    <p>Llevar a efecto el presente contrato de COMPRAVENTA MERCANTIL.</p>
                    <p>Firmando en conformidad.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADGFbfiAAABTUlEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDOMEAAHwsPujAAAAAElFTkSuQmCC" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="./views/assets/img/firmaFernando.png" height="100px"></p>
                    <p>Parte vendedora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parte compradora </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="printAgreementButton" href="#" onclick="printDocument('Agreementa45mes06Y2')">Imprimir</a>
                </div>
            </div>
        </div>
    </div>
    </td>
    <td>
                        <img src="../views/assets/productTypes/4.png">
                patinete s-cooter <br>
                </td>
    </tr></tbody>
</table><div class="dataTables_info" id="tableUsers_info" role="status" aria-live="polite">Mostrando registros del 1 al 10 de un total de 105 registros</div><div class="dataTables_paginate paging_simple_numbers" id="tableUsers_paginate"><a class="paginate_button previous disabled" aria-controls="tableUsers" data-dt-idx="0" tabindex="0" id="tableUsers_previous">Anterior</a><span><a class="paginate_button current" aria-controls="tableUsers" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="tableUsers" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="tableUsers" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="tableUsers" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="tableUsers" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a class="paginate_button " aria-controls="tableUsers" data-dt-idx="6" tabindex="0">11</a></span><a class="paginate_button next" aria-controls="tableUsers" data-dt-idx="7" tabindex="0" id="tableUsers_next">Siguiente</a></div></div>
</div>
</div>
</div>
</div>
</div>
@endsection
@section('scripts')
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="js/demo/datatables-demo.js"></script>
@endsection