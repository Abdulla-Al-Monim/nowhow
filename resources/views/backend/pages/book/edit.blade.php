@extends("backend.layouts.backend")
@section('breath-com-name')
Template
@endsection
@section('user-book-manage-active')
    active
@endsection
@section('user-book-cat-show')
    show
@endsection

@section("style")
	<link href="{{ asset('backend') }}/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/editors/markdown/simplemde.min.css">
	    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('backend') }}/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/select2/select2.min.css">
@endsection
@section("body")
	data-spy="scroll" data-target="#navSection" data-offset="140"
@endsection
@section("wrapper")
<style type="text/css">
	.select2-container--default .select2-selection--multiple{
		background: white!important;
	}
</style>
<div class="layout-px-spacing">
               
    <div class="row layout-top-spacing">
	        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing box-shadow widget-header">
	        	<div class="row layout-top-spacing">

	                <div id="basic" class="col-lg-12 layout-spacing ">
	                    <div class="statbox widget box ">
	                        <div class="widget-header">
	                            <div class="row">
	                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
	                                    <h4>Update Book</h4>
	                                </div>                 
	                            </div>
	                        </div>
	                        <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
	                        	@csrf
		                        <div class="row mt-5">
		                        	<div class="col-md-6">
	                                    <div class="col-md-12 mb-4">
	                                        <label for="title">Book Title</label>
	                                        <input type="text" class="form-control" value="{{$book->title}}" id="title" placeholder="" name="title" >
	                                    </div>
	                                    <div class="col-md-12 mb-4">
		                                    <div class="custom-file-container" data-upload-id="myFirstImage">
											    <label>Thumbnail (Image) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
											    <label class="custom-file-container__custom-file" >
											        <input type="file" class="custom-file-container__custom-file__custom-file-input" value="{{$book->image}}" accept="image/*" name="image">
											        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
											        <span class="custom-file-container__custom-file__custom-file-control"> Image</span>
											    </label>
											    <div class="custom-file-container__image-preview"></div>
											</div>
										</div>
										
	                                    <div class="col-md-12 mb-4">
	                                        <label for="id">Category</label>
	                                        <select class="form-control  basic"  id="id" name="category_id">
    													    @foreach(App\Models\UserBookCategory::get() as $cat)
													<option value="{{$cat->id}}" @if($cat->id === $book->category_id) selected @endif>{{$cat->category_name}}</option>
													@endforeach
											</select>
	                                    </div>
	                                    <div class="col-md-12 mb-4">
	                                        <label for="idSub">Sub Category</label>
	                                        <select class="form-control  basic"  id="idSub" name="subcategory_id">
    													    
											</select>
	                                    </div>
	                                    <div class="col-md-12 mb-4">
	                                        <label for="idTag">Tags</label>
	                                        <select class="form-control  basic" name="tag_names[]" id="idTag" multiple>
    												@foreach(App\Models\UserBookTag::get() as $tag)
    												@php
    												$tagName = App\Models\BookTag::where('tag_name',$tag->book_tag_name)->first();

    												@endphp
														<option value="{{$tag->book_tag_name}}" @if($tagName != null) selected @endif>{{$tag->book_tag_name}}</option>
													@endforeach
											</select>
	                                    </div>
	                                    <div class="col-md-12 mb-4">
	                                    	<label>Template Type</label>
	                                        <div class="n-chk">
										    <label class="new-control new-radio radio-primary">
										      <input type="radio" class="new-control-input"  name="price_type"  onclick="hidePrice()" value="0" @if($book->price_type == 0) checked @endif>
										      <span class="new-control-indicator"></span>Free
										    </label>
										    <label class="new-control new-radio radio-primary">
										      <input type="radio" class="new-control-input" name="price_type"  onclick="showPrice()" value="1" @if($book->price_type == 1) checked @endif>
										      <span class="new-control-indicator"></span>Premium
										    </label>
										</div>
	                                    </div>
	                                    
	                                    <div class="col-md-12 mb-4" id="price">
	                                        <label for="title">Price</label>
	                                        <input type="text" class="form-control" id="title" placeholder="" value="{{$book->price}}" name="price">
	                                    </div>
	                                    <div class="col-md-12 mb-4" id="dprice">
	                                        <label for="title">Discount Price</label>
	                                        <input type="text" class="form-control" id="title" placeholder="" value="{{$book->discount}}" name="discount" >
	                                    </div>
		                        </div>
		                        <div class="col-md-6">
		                        	<div class="col-md-12 mb-4">
	                                        <label for="title">Description</label>
	                                        <textarea id="demo2" name="description">{!!$book->description!!}</textarea>
	                                </div>
	                                <div class="col-md-12 mb-4">
	                                    <label for="dlink">Goolge Drive Link</label>
	                                    <input type="url" class="form-control" id="dlink" placeholder="" name="link_g_drive" value="{{$book->link_g_drive}}" >
	                                </div>
	                                <div class="col-md-12 mb-4">
	                                    <label for="dlink">Dropbox Link</label>
	                                    <input type="url" name="link_dropbox" class="form-control" id="dlink" placeholder="" value="{{$book->link_dropbox}}" >
	                                </div>
	                                <div class="col-md-12 mb-4">
		                                    	<label>Publish</label>
		                                        <div class="n-chk">
												    <label class="new-control new-radio radio-primary">
												      <input type="radio" class="new-control-input" name="libarary" onclick="hideLibrary()" value="0" @if($book->library_id == null) checked @endif>
												      <span class="new-control-indicator"></span>Publish On Now How
												    </label>
												    <label class="new-control new-radio radio-primary">
												      <input type="radio" class="new-control-input" name="libarary" onclick="showLibrary()" value="1" @if($book->library_id != null) checked @endif>
												      <span class="new-control-indicator"></span>Publish On Now How & Flexflix
												    </label>
												</div>
	                                    	</div>
	                                    	<div class="col-md-12 mb-4" id="library">
	                                        <label for="title">Library Name</label>
	                                        <select class="form-control  basic"  id="id" name="library_id">
	                                        	<option value="">Select Library</option>
    													    @foreach(App\Models\Library::get() as $library)
													<option value="{{$library->id}}"  @if($book->library_id == $library->id) selected @endif>{{$library->name}}</option>
													@endforeach
											</select>
										</div>
	                           		<div class="col-md-12 mb-4">
											<div class="">                                
			                                    <div class="row">
			                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
			                                            <label for="exampleFormControlFile1">File Upload</label>
			                                        </div>
			                                    </div>
			                                </div>
											 <div class="">
			                                    <div class="form-group mb-4 mt-3">
                                            
		                                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
		                                            <small  class="form-text text-muted">Max file size 10 mb</small>
		                                        </div>
                                			</div>
	                                    </div>
	                                </div>
		                        </div>
		                        
		                        <div class="col-md-12">
	                        			<div class="col-md-12 mb-4">
		                                    
		                                    <input type="submit" name="" class="btn btn-primary submit-fn mt-2" value="Add Book">
		                                </div>
	                        		</div>
		                        </div>
		                        <div class="row">
	                        		
	                        	</div>
	                        </form>
	                        </div>
	                        </div>           
	                    </div>

	                </div>
	            </div>
	        </div>
	        


    </div>
    </form>
</div>

@endsection

@section("script")
	<script src="{{ asset('backend') }}/plugins/file-upload/file-upload-with-preview.min.js"></script>
	<script src="{{ asset('backend') }}/plugins/editors/markdown/simplemde.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/editors/markdown/custom-markdown.js"></script>
        <script src="{{ asset('backend') }}/plugins/select2/select2.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/select2/custom-select2.js"></script>

	<script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    @if($book->price_type == 0 )
    <script type="text/javascript">
    	$('#price').hide();
    	$('#dprice').hide();
    	$('#library').hide();
    	function showPrice(){
    		$('#price').show();
    		$('#dprice').show();
    	}
    	function hidePrice(){
    		$('#price').hide();
    		$('#dprice').hide();
    	}
    	function showLibrary(){
    		$('#library').show();
    		
    	}
    	function hideLibrary(){
    		
    		$('#library').hide();
    	}
    </script>
    @else
	<script type="text/javascript">
    	$('#price').show();
    	$('#dprice').show();
    	
    	function showPrice(){
    		$('#price').show();
    		$('#dprice').show();
    	}
    	function hidePrice(){
    		$('#price').hide();
    		$('#dprice').hide();
    	}
    	
    </script>
    @endif


    @if($book->library_id == null )
    <script type="text/javascript">

    	$('#library').hide();
    	function showLibrary(){
    		$('#library').show();
    		
    	}
    	function hideLibrary(){
    		
    		$('#library').hide();
    	}
    </script>
    @else
	<script type="text/javascript">
    	
    	$('#library').show();
    	
    	    function showLibrary(){
    		$('#library').show();
    		
    	}
    	function hideLibrary(){
    		
    		$('#library').hide();
    	}
    </script>
    @endif


<script type="text/javascript">
  $(document).ready(function() {
    $('select[name="category_id"]').on('change', function(){
        var category_id = $(this).val();
        if(category_id) {
            $.ajax({
                url: "{{  url('/user/book/category/ajax/') }}/"+category_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                	console.log(data)
                    $('select[name="subcategory_id"]').html('');
                   var d =$('select[name="subcategory_id"]').empty();
                      $.each(data, function(key, value){

                          $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.book_sub_category_name + '</option>');

                      });

                },

            });
        } else {
            alert('danger');
        }

    });

});
</script>
@endsection