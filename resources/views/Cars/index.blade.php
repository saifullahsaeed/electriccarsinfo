@extends('layouts.app')

@section('content')
    <style>
        #dLabel {
            width: 240px;
            height: 40px;
            border-radius: 4px;
            background-color: #fff;
            border: solid 1px #cccccc;
            text-align: left;
            padding: 7.5px 15px;
            color: #ccc;
            letter-spacing: 0.7px;
            margin-top: 25px;


        }

        .caret {
            float: right;
            margin-top: 9px;
            display: block;
        }

        .dropdown-menu {
            width: 240px;
            padding: 0;
            margin: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .dropdown button:hover,
        .dropdown button:focus {
            border: none;
            outline: 0;
        }

        .dropdown.open button#dLabel {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;

            box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.23);
            border: solid 1px #666;
            border-bottom: none;
        }

        .dropdown.open ul {
            box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.23);
            border: solid 1px #666;
            border-top: none;
            height: 200px;
            overflow-y: scroll;
        }

        .dropdown-menu li {

            line-height: 1.5;
            letter-spacing: 0.7px;
            color: #666;
            font-size: 14px;
            cursor: pointer;
            padding: 7.5px 15px;
            border-top: solid 1px #f3f3f3;



        }

        .dropdown-menu li:hover {
            background-color: #ccc;
        }




        .upload__box {
            padding: 40px;
        }

        .upload__inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload__btn {
            display: inline-block;
            font-weight: 600;
            color: #fff;
            text-align: center;
            min-width: 116px;
            padding: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid;
            background-color: #4045ba;
            border-color: #4045ba;
            border-radius: 10px;
            line-height: 26px;
            font-size: 14px;
        }

        .upload__btn:hover {
            background-color: unset;
            color: #4045ba;
            transition: all 0.3s ease;
        }

        .upload__btn-box {
            margin-bottom: 10px;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .upload__img-box {
            width: 200px;
            padding: 0 10px;
            margin-bottom: 12px;
        }

        .upload__img-close {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: center;
            line-height: 24px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close:after {
            content: "✖";
            font-size: 14px;
            color: white;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }

    </style>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Header -->

        <div class="header bg-primary pb-6 mt--10">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--26">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Insert A Car</h3>
                        </div>
                        <!-- Create A Form -->
                        <div class="card-body">
                            <form action=" {{ route('cars.store') }} " method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="xl-12 sm-4 w-full px-3">
                                        <div class="form-group">
                                            <label for="name">Car Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter Car Name" required>
                                        </div>
                                    </div>
                                    <div class="xl:w-1/2 sm:w-1/2 w-full px-3">
                                        <div class="form-group">
                                            <label for="price">Car Price</label>
                                            <input type="text" class="form-control" id="price" name="price"
                                                placeholder="$" required>
                                        </div>
                                    </div>
                                    <div class="xl:w-1/2 sm:w-1/2 w-full px-3">
                                        <div class="form-group">
                                            <label for="price">Car Year</label>
                                            <input type="text" class="form-control" id="year" name="year"
                                                placeholder="Year" required>
                                        </div>
                                    </div>
                                    <div class="xl:w-1/2 sm:w-1/2 w-full px-3 mt-2">
                                        <div class="form-group">
                                            <div class="dropdown">
                                                <input type="hidden" value="-1" id="company" name="company" required>
                                                <button id="dLabel" class="dropdown-select" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Select Company
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                    @if (count($companies) > 0)
                                                        @foreach ($companies as $company)
                                                            <option itemid="{{ $company->id }}">{{ $company->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Car Description</label>
                                    <textarea id="editor" name="description" style="display: none" class="form-control"
                                        rows="6" required>

                                                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Car Images (Maximum Five)</label>
                                    <div class="row">
                                        <div class="upload__box">
                                            <div class="upload__btn-box">
                                                <label class="upload__btn">
                                                    <p style="margin: 0">Upload images</p>
                                                    <input type="file" name="fileUpload[]" multiple="" data-max_length="20"
                                                        class="upload__inputfile">
                                                </label>
                                            </div>
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" class="btn  btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            @include('layouts.footers.auth')
        </div>
    </div>
    @push('js')
        <script>
            jQuery(document).ready(function() {
                ImgUpload();
            });

            function ImgUpload() {
                var imgWrap = "";
                var imgArray = [];

                $('.upload__inputfile').each(function() {
                    $(this).on('change', function(e) {
                        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                        var maxLength = $(this).attr('data-max_length');

                        var files = e.target.files;
                        var filesArr = Array.prototype.slice.call(files);
                        var iterator = 0;
                        filesArr.forEach(function(f, index) {

                            if (!f.type.match('image.*')) {
                                return;
                            }

                            if (imgArray.length > maxLength) {
                                return false
                            } else {
                                var len = 0;
                                for (var i = 0; i < imgArray.length; i++) {
                                    if (imgArray[i] !== undefined) {
                                        len++;
                                    }
                                }
                                if (len > maxLength) {
                                    return false;
                                } else {
                                    imgArray.push(f);

                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        var html =
                                            "<div class='upload__img-box'><div style='background-image: url(" +
                                            e.target.result + ")' data-number='" + $(
                                                ".upload__img-close").length + "' data-file='" + f
                                            .name +
                                            "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                        imgWrap.append(html);
                                        iterator++;
                                    }
                                    reader.readAsDataURL(f);
                                }
                            }
                        });
                    });
                });

                $('body').on('click', ".upload__img-close", function(e) {
                    var file = $(this).parent().data("file");
                    for (var i = 0; i < imgArray.length; i++) {
                        if (imgArray[i].name === file) {
                            imgArray.splice(i, 1);
                            break;
                        }
                    }
                    $(this).parent().parent().remove();
                });
            }
            $('.dropdown-menu option').on('click', function() {
                var getValue = $(this).text();
                var getIndex = $(this).attr("itemid");
                $('.dropdown-select').text(getValue);
                $('#company').val(getIndex);
            });
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="{{ asset('argon') }}/js/editor.js"></script>
        <script src="{{ asset('argon') }}/js/wysiwyg.js"></script>
        <script src="{{ asset('argon') }}/js/highlight.js"></script>
        <script type="text/javascript">
            $('#editor').wysiwyg({
                fontSizes: ['8px', '9px', '10px', '11px', '12px', '14px', '15px', '16px', '18px', '20px', '24px',
                    '30px', '32px', '36px', '48px'
                ],
                fontSizeDefault: '12px',
                fontFamilies: ['Open Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS',
                    'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times', 'Times New Roman',
                    'Verdana'
                ],
                fontFamilyDefault: 'Open Sans',
                emojiDefault: ["\u{1f600}", "\u{1f62c}", "\u{1f601}", "\u{1f602}", "\u{1f603}", "\u{1f604}",
                    "\u{1f605}", "\u{1f606}", "\u{1f607}", "\u{1f609}", "\u{1f60a}", "\u{1f642}", "\u{1f643}",
                    "\u{1f60b}", "\u{1f60c}", "\u{1f60d}", "\u{1f618}", "\u{1f617}", "\u{1f619}", "\u{1f61a}",
                    "\u{1f61c}", "\u{1f61d}", "\u{1f61b}", "\u{1f911}", "\u{1f913}", "\u{1f60e}", "\u{1f917}",
                    "\u{1f60f}", "\u{1f636}", "\u{1f610}", "\u{1f611}", "\u{1f612}", "\u{1f644}", "\u{1f914}",
                    "\u{1f633}", "\u{1f61e}", "\u{1f61f}", "\u{1f620}", "\u{1f621}", "\u{1f614}", "\u{1f615}",
                    "\u{1f641}", "\u{1f623}", "\u{1f616}", "\u{1f62b}", "\u{1f629}", "\u{1f624}", "\u{1f62e}",
                    "\u{1f631}", "\u{1f628}", "\u{1f630}", "\u{1f62f}", "\u{1f626}", "\u{1f627}", "\u{1f622}",
                    "\u{1f625}", "\u{1f62a}", "\u{1f613}", "\u{1f62d}", "\u{1f635}", "\u{1f632}", "\u{1f910}",
                    "\u{1f637}", "\u{1f912}", "\u{1f915}", "\u{1f634}", "\u{1f4a4}"
                ],
                symbolsDefault: ["&lt;", "&gt;", "&laquo;", "&raquo;", "&lsaquo;", "&rsaquo;", "&quot;", "&prime;",
                    "&Prime;", "&lsquo;", "&rsquo;", "&sbquo;", "&ldquo;", "&rdquo;", "&bdquo;", "&#10076;",
                    "&#10075;", "&amp;", "&apos;", "&sect;", "&copy;", "&not;", "&reg;", "&macr;", "&deg;",
                    "&plusmn;", "&sup1;", "&sup2;", "&sup3;", "&frac14;", "&frac12;", "&frac34;", "&acute;",
                    "&micro;", "&para;", "&middot;", "&iquest;", "&fnof;", "&trade;", "&bull;", "&hellip;",
                    "&oline;", "&ndash;", "&mdash;", "&permil;", "&#125;", "&#123;", "&#61;", "&ne;", "&cong;",
                    "&asymp;", "&le;", "&ge;", "&ang;", "&perp;", "&radic;", "&sum;", "&int;", "&#8251;",
                    "&divide;", "&infin;", "&#64;", "&#91;", "&#93;", "&larr;", "&uarr;", "&rarr;", "&darr;",
                    "&harr;", "&crarr;", "&lArr;", "&uArr;", "&rArr;", "&dArr;", "&hArr;", "&#10144;", "&#10148;",
                    "&#10149;", "&#10150;", "&#10163;", "&#8634;", "&#8635;", "&#8679;", "&#8617;", "&#11015;",
                    "&#11014;", "&spades;", "&clubs;", "&hearts;", "&diams;", "&#9825;", "&#9826;", "&#9828;",
                    "&#9831;", "&#8372;", "&euro;", "&dollar;", "&cent;", "&pound;", "&#8381;", "&yen;", "&#8377;",
                    "&#22291;", "&#8376;"
                ],
                colorPalette: [
                    ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)", "rgb(153, 153, 153)",
                        "rgb(183, 183, 183)", "rgb(204, 204, 204)", "rgb(217, 217, 217)", "rgb(239, 239, 239)",
                        "rgb(243, 243, 243)", "rgb(255, 255, 255)"
                    ],
                    ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
                        "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)",
                        "rgb(255, 0, 255)"
                    ],
                    ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)",
                        "rgb(217, 234, 211)", "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)",
                        "rgb(217, 210, 233)", "rgb(234, 209, 220)", "rgb(221, 126, 107)", "rgb(234, 153, 153)",
                        "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", "rgb(162, 196, 201)",
                        "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
                        "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)",
                        "rgb(147, 196, 125)", "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)",
                        "rgb(142, 124, 195)", "rgb(194, 123, 160)", "rgb(166, 28, 0)", "rgb(204, 0, 0)",
                        "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)", "rgb(69, 129, 142)",
                        "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
                        "rgb(133, 32, 12)", "rgb(153, 0, 0)", "rgb(180, 95, 6)", "rgb(191, 144, 0)",
                        "rgb(56, 118, 29)", "rgb(19, 79, 92)", "rgb(17, 85, 204)", "rgb(11, 83, 148)",
                        "rgb(53, 28, 117)", "rgb(116, 27, 71)", "rgb(91, 15, 0)", "rgb(102, 0, 0)",
                        "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", "rgb(12, 52, 61)",
                        "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"
                    ]
                ],
            });

            $('#submit').on('click', function() {

                var getcompany = $('#company').val();
                if (getcompany == "-1") {
                    alert("Please select company name");
                }
            });
        </script>
    @endpush
@endsection
