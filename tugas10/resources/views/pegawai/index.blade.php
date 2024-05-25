@include('pegawai.header')
@include('pegawai.sidebar')
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pegawai</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="box-area">
                    <div class="single-box">
                        <div class="img-area"></div>
                        <div class="img-text">
                            <span class="header-text"><strong>Octaviani Nursalsabila</strong></span>
                            <div class="line"></div>
                            <h3>Developer</h3>
                            <p>Perempuan</p>
                            <p>Code is our vibe, innovation is our mission. Together, we're creating solutions that rock the world</p>
                        </div>
                    </div>
                    <div class="single-box">
                        <div class="img-area"></div>
                        <div class="img-text">
                            <span class="header-text"><strong>Hardhian</strong></span>
                            <div class="line"></div>
                            <h3>Content Creator</h3>
                            <p>Laki-Laki</p>
                            <p>Content creation is my jam, turning ideas into digital gold. Let's craft content that makes waves and sparks conversations!</p>
                        </div>
                    </div>
                    <div class="single-box">
                        <div class="img-area"></div>
                        <div class="img-text">
                            <span class="header-text"><strong>Salsabila</strong></span>
                            <div class="line"></div>
                            <h3>Staff</h3>
                            <p>Perempuan</p>
                            <p>On the grind, making moves behind the scenes. We're the backbone, keeping things running smooth and steady</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('pegawai.footer')

<style>
    /* CSS yang digabungkan */
    .box-area {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin-top: 70px;
    }

    .single-box {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 300px;
        height: auto;
        border-radius: 4px;
        background-color: #fff;
        text-align: center;
        margin: 20px;
        padding: 20px;
        transition: .3s;
        box-shadow: 1px 0 5px 0 rgba(0, 0, 0, 0.6);
    }

    .img-area {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 80px;
        height: 80px;
        border: 6px solid #ddd;
        border-radius: 50%;
        margin-bottom: 10px;
        padding: 20px;
        background-size: cover;
        background-position: center center;
    }

    .single-box:nth-child(1) .img-area {
        background-image: url(https://i.pinimg.com/736x/77/97/08/779708072b51e99df4e9f81b48145513.jpg);
    }

    .single-box:nth-child(2) .img-area {
        background-image: url(https://i.pinimg.com/736x/83/1e/8d/831e8d93300da1fe5ff6295ca53ee97d.jpg);
    }

    .single-box:nth-child(3) .img-area {
        background-image: url(https://i.pinimg.com/736x/78/64/0c/78640ca1ea822f611fe4995e63eb1d0f.jpg);
    }

    .header-text {
        font-size: 24px;
        font-weight: 500px;
        line-height: 48px;
    }

    .img-text h3 {
        margin: 10px 0;
    }

    .img-text p {
        font-size: 12px;
        font-weight: 400px;
        line-height: 30px;
    }

    .single-box:hover {
        background-color: coral;
        color: #fff;
    }

    .single-box:hover .line {
        background-color: #fff;
    }

    .informasi-pegawai {
        margin-top: 20px;
        text-align: center;
        font-size: 16px;
    }
</style>
