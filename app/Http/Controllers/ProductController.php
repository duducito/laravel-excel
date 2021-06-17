
























  
   
      
      
      
      
       
       
       
       
       
       
        
        
        
        
        
        
        
         
         
            
            
            
             $msj='Codigo Producto Vacio';
             DB::table('stocks')
            $ingre->cantidad=$request->cantidad;
            $stock->codC=strtoupper($request->codC);
            $stock->codM=strtoupper($request->codigoM);
            $stock->codP=strtoupper($request->codProducto);
            $stock->save();
            $stock->stock=$request->agrecant*$um[0]->unidMayor;
            $stock=new stock;
            <!--
           $medi= DB::select('select codigoM from medidas ');
           $medi= DB::select('select codigoM from medidas ');
          $ingre->cantidad=$request->agrecant;  
          {
         $ingre->codigoC=strtoupper($request->codC);
         $ingre->codigoM=strtoupper($request->codigoM);
         $ingre->codigoP=strtoupper($request->codProducto);
         $ingre->fecha=date('y-m-d');
         $ingre->nombre=strtoupper($request->nombre);
         //
         return redirect()->route("producto.index");
        $cate=DB::select('select codigoC from categorias ');
        $cate=DB::select('select codigoC from categorias ');
        $cate=DB::select('select codigoC from categorias ');
        $cate=DB::select('select codigoC from categorias ');
        $ingre->save();
        $ingre->Unid=$um[0]->mayor;
        $ingre=new elementos;
        $lista= DB::select('select * from products');
        $lista= DB::select('select * from products');
        $lista= DB::select('select * from products');
        $lista= DB::select('select * from products');
        $medi= DB::select('select codigoM from medidas ');
        $medi= DB::select('select codigoM from medidas ');
        $msj="";
        $msj='Producto Eliminado Correctamente...';
        $msj='Registro Guardado';
        $msj='Registro Repetido';
        $productos->cantidad=$request->cantidad;
        $productos->ciProvedor=strtoupper($request->ciProvedor);
        $productos->codigoC=strtoupper($request->codC);
        $productos->codigoM=strtoupper($request->codigoM);
        $productos->codigoP=strtoupper($request->codProducto);
        $productos->nombre=strtoupper($request->nombre);
        $productos->Pproducto=$request->Pproducto;
        $productos->precio_mayor=$request->precio_mayor;
        $productos->precio_unidad=$request->precio_menor;
        $productos->save();
        $productos=new product;
        $um= DB::select('select * from medidas where codigoM="'.$request->codigoM.'"');
        ->update(['cantiAgregada' =>($request->Pproducto*$um[0]->unidMayor),'total'=>$request->cantidad*$um[0]->unidMayor]);
        ->update(['stock' =>($request->agrecant*$um[0]->unidMayor)+$repe[0]->stock]);
        ->where('codP', $request->codProducto)  // find your user by their email
        ->where('codP', $request->codProducto)  // find your user by their email
        //
        //
        //
        //
        //======aquie actualizo agrega producto
        //return view('inicio.producto',compact('msj'));
        DB::table('almacens')
        DB::table('products')->where('id', '=',$id)->delete();
        else
        else
        else
        if($repe==null)
        if($request->agrecant==null)
        if($request->codProducto!="" )
        return view('listas.lista_productos',compact('medi','cate','msj','lista'));
        return view('listas.lista_productos',compact('medi','cate','msj','lista'));
        return view('listas.lista_productos',compact('medi','cate','msj','lista'));
        return view('listas.lista_productos',compact('medi','cate','msj','lista'));
        {
        {
        {
        {
        {
        {
        {
        }
        }
        }
        }
        }
        }
        }*/
        }else
       */
       /*
       /* if($alma!=null)
       // DD($alma);
       // dd($request->Pproducto);
     *
     *
     *
     *
     *
     *
     *
     * @param  \App\Models\product  $product
     * @param  \App\Models\product  $product
     * @param  \App\Models\product  $product
     * @param  \App\Models\product  $product
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     * Display a listing of the resource.
     * Display the specified resource.
     * Remove the specified resource from storage.
     * Show the form for creating a new resource.
     * Show the form for editing the specified resource.
     * Store a newly created resource in storage.
     * Update the specified resource in storage.
     */
     */
     */
     */
     */
     */
     */
    $request->agrecant=$request->cantidad;
    /**
    /**
    /**
    /**
    /**
    /**
    /**
    if($cod==null)
    public function create()
    public function destroy(product $product,$id)
    public function edit(product $product)
    public function index()                       
    public function show(product $product)
    public function store(Request $request)
    public function update(Request $request, product $product)
    {
    {
    {
    {
    {
    {
    {
    {
    }
    }
    }
    }
    }
    }
    }
    }
   $repe=DB::select('select * from stocks where codM="'.$request->codigoM.'" and codP="'.$request->codProducto.'"');
   if($request->agrecant==null)
   {
   }
$cod= DB::select('select codigoP from products where codigoP="'.$request->codProducto.'"');
//dd($request);
<?php
ame="cantidad" pla
ame="precio_mayor"
ame="precio_menor"
Author: Color
class ProductController extends Controller
name="ciProveedor"
name="nombre" plac
namespace App\Http\Controllers;
use App\Models\Almacen;
use App\Models\elementos;
use App\Models\product;
use App\Models\stock;
use DB;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
use Illuminate\Http\Request;
use redirectTo;
{
}