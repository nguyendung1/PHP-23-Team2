


    
     
         <form>
         	  <div class="col-md-8">
         	  <div class="form-group">
            {!!Form::label('name','Tên Sản Phẩm')!!}
              
              
             {!!Form::text('name',null,['class'=>'form-control'])!!}<span>* Mời Bạn Nhập Tên Sản Phẩm</span>
          
            </div>
               
          </div>
          	<div class="col-md-8">
           <div class="form-group">
           	   {!!Form::label('price','Giá Sản Phẩm')!!}

           	   
            
           

            {!!Form::text('price',null,['class'=>'form-control'])!!}
            <span>*Mời Bạn Nhập Giá Cho Sản Phẩm(VND)</span>
          
         </div>
           </div>
          <div class="col-md-8">
           <div class="form-group">
           	   {!!Form::label('Đánh Giá Chất Lương(Tối Đa 5 Sao)','Đánh Giá Chất Lượng(Tối Đa 5 Sao)')!!}
           	  
             {!!Form::text('quality',null,['class'=>'form-control'])!!}
         </div>
           </div>
              <div class="col-md-8">
              <div class="form-group">
           	   {!!Form::label('description','Mô Tả Về Sản Phẩm')!!}
           	  
             {!!Form::text('description',null,['class'=>'form-control'])!!}  
           </div>
           </div>
           <div class="col-md-8">
             <div class="form-group">
           	   {!!Form::label('image','Nguồn Hình Ảnh')!!}
           	 
             {!!Form::file('image',null,['class'=>'form-control'])!!}  
         </div>
           </div>
           
            <div class="col-md-8">
             <div class="form-group">
           	   {!!Form::label('category','Hãng Sản Xuất')!!}
           	   <span>(Hãy Chọn Hãng Xuẩn Xuất Cho Sản Phẩm)</span>
           	   <div class="form-controls">
             {!!Form::select('category_id',$categories,null,['class'=>'form-control'])!!}

            
         </div>
           </div>

          {!!Form::submit('Thêm Sản Phẩm',['class'=>'btn btn-primary'])!!}


         </form>   
  

