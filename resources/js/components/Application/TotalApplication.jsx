import axios from 'axios'
import React, { useEffect, useState } from 'react'

const TotalApplication = () => {
    const [totalApplication, setTotalapplication] = useState(0)
    const [totalApplicationByScheme1, setTotalApplicationByScheme1] = useState(0)
    const [totalApplicationByScheme2, setTotalApplicationByScheme2] = useState(0)
    const [totalApplicationByScheme3, setTotalApplicationByScheme3] = useState(0)
    const [totalApplicationByPremise1, setTotalApplicationByPremise1] = useState(0)
    const [totalApplicationByPremise2, setTotalApplicationByPremise2] = useState(0)
    const [totalApplicationByPremise3, setTotalApplicationByPremise3] = useState(0)
    const [totalApplicationByKategori1, setTotalApplicationByKategori1] = useState(0)
    const [totalApplicationByKategori2, setTotalApplicationByKategori2] = useState(0)
    const [totalApplicationByKategori3, setTotalApplicationByKategori3] = useState(0)
    const [totalApplicationByKategori4, setTotalApplicationByKategori4] = useState(0)

    const [totalApplicationCreatedAt, setTotalapplicationCreatedAt] = useState(0)
    const [totalApplicationByScheme1UpdatedAt, setTotalapplicationByScheme1UpdatedAt] = useState(0)
    const [totalApplicationByScheme2UpdatedAt, setTotalapplicationByScheme2UpdatedAt] = useState(0)

    const GetTotalApplication = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalapplication(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationByScheme1 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByScheme1(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationByScheme2 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByScheme2(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationByScheme3 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByScheme3(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationByPremise1 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByPremise1(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationByPremise2 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByPremise2(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationByPremise3 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByPremise3(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationByKategori1 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByKategori1(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationByKategori2 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByKategori2(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationByKategori3 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByKategori3(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationByKategori4 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByKategori4(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }

    // const GetTotalApplicationCreatedAt = async(url) => {
    //     await axios.get(url).then((response)=>{
    //         setTotalapplicationCreatedAt(response.data)
    //     }).catch((e)=>{
    //         console.log(e)
    //     })
    // }
    const GetTotalApplicationScheme1UpdatedAt = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalapplicationByScheme1UpdatedAt(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetTotalApplicationScheme2UpdatedAt = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalapplicationByScheme2UpdatedAt(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }

    useEffect(()=>{
        GetTotalApplication('/home/application/count')
        GetTotalApplicationByScheme1('/home/application/scheme1/count')
        GetTotalApplicationByScheme2('/home/application/scheme2/count')
        GetTotalApplicationByScheme3('/home/application/scheme3/count')

        GetTotalApplicationByPremise1('/home/application/premise1/count')
        GetTotalApplicationByPremise2('/home/application/premise2/count')
        GetTotalApplicationByPremise3('/home/application/premise3/count')

        GetTotalApplicationByKategori1('/home/application/kategori1/count')
        GetTotalApplicationByKategori2('/home/application/kategori2/count')
        GetTotalApplicationByKategori3('/home/application/kategori3/count')
        GetTotalApplicationByKategori4('/home/application/kategori4/count')

        // GetTotalApplicationCreatedAt('/home/application/created_at')
        GetTotalApplicationScheme1UpdatedAt('/home/application/scheme1/updated_at')
        GetTotalApplicationScheme2UpdatedAt('/home/application/scheme2/updated_at')
    })

  return (
    <>
    {/* Total */}
    <div className="row">
        <label>
            <h5 className="card-title">
                Total {/* <span>| Tahun Ini</span> */}: {totalApplication}
                {/* ({totalApplicationCreatedAt}) */}
            </h5>
        </label>
    </div>
    
    <h5 className="card-title text-center">SKIM</h5>
    {/* SCHEME 1 PHKT01 */}
    <div className="col-xxl-4 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            {/* <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a> */}
            <ul className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li className="dropdown-header text-start">
                <h6>Filter</h6>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Hari Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Bulan Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Tahun Ini
                </a>
                </li>
            </ul>
            </div>
            <div className="card-body">
            <h5 className="card-title">
                PHKT01
                {/* <span>| Tahun Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByScheme1}
                </h6>
                <span className="text-muted small pt-2 ps-1">Dikemaskini: </span>
                <span className="text-success small pt-1 fw-bold">{totalApplicationByScheme1UpdatedAt}</span>{" "}
                </div>
            </div>
            </div>
        </div>
    </div>

    {/* SCHEME 2 PHKT02 */}
    <div className="col-xxl-4 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            {/* <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a> */}
            <ul className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li className="dropdown-header text-start">
                <h6>Filter</h6>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Hari Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Bulan Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Tahun Ini
                </a>
                </li>
            </ul>
            </div>
            <div className="card-body">
            <h5 className="card-title">
                PHKT02 
                {/* <span>| Tahun Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByScheme2}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                <span className="text-muted small pt-2 ps-1">Dikemaskini:</span>
                <span className="text-danger small pt-1 fw-bold">{totalApplicationByScheme2UpdatedAt}</span>{" "}
                </div>
            </div>
            </div>
        </div>
    </div>

    {/* SCHEME 3 PHKT03 */}
    <div className="col-xxl-4 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            {/* <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a> */}
            <ul className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li className="dropdown-header text-start">
                <h6>Filter</h6>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Hari Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Bulan Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Tahun Ini
                </a>
                </li>
            </ul>
            </div>
            <div className="card-body">
            <h5 className="card-title">
                PHKT03
                {/* <span>| Tahun Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByScheme3}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <h5 className="card-title text-center">PREMIS</h5>
    {/* PREMISE 1 KEDAI */}
    <div className="col-xxl-4 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            {/* <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a> */}
            <ul className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li className="dropdown-header text-start">
                <h6>Filter</h6>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Hari Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Bulan Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Tahun Ini
                </a>
                </li>
            </ul>
            </div>
            <div className="card-body">
            <h5 className="card-title">
                Kedai
                {/* <span>| Tahun Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByPremise1}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                </div>
            </div>
            </div>
        </div>
    </div>

    {/* PREMISE 2 RUMAH */}
    <div className="col-xxl-4 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            {/* <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a> */}
            <ul className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li className="dropdown-header text-start">
                <h6>Filter</h6>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Hari Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Bulan Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Tahun Ini
                </a>
                </li>
            </ul>
            </div>
            <div className="card-body">
            <h5 className="card-title">
                Rumah
                {/* <span>| Tahun Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByPremise2}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                </div>
            </div>
            </div>
        </div>
    </div>

    {/* PREMISE 2 RUMAH KAMPUNG */}
    <div className="col-xxl-4 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            {/* <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a> */}
            <ul className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li className="dropdown-header text-start">
                <h6>Filter</h6>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Hari Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Bulan Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Tahun Ini
                </a>
                </li>
            </ul>
            </div>
            <div className="card-body">
            <h5 className="card-title">
                Rumah Kampung
                {/* <span>| Tahun Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByPremise3}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                </div>
            </div>
            </div>
        </div>
    </div>

    <h5 className="card-title text-center">KATEGORI</h5>
    {/* KATEGORI 1 KHIDMAT PELANGGAN (AFSB) */}
    <div className="col-xxl-6 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            {/* <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a> */}
            <ul className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li className="dropdown-header text-start">
                <h6>Filter</h6>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Hari Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Bulan Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Tahun Ini
                </a>
                </li>
            </ul>
            </div>
            <div className="card-body">
            <h5 className="card-title">
                Khidmat Pelanggan (AFSB)
                {/* <span>| Tahun Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByKategori1}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                </div>
            </div>
            </div>
        </div>
    </div>
    {/* KATEGORI 2 OPERASI */}
    <div className="col-xxl-6 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            {/* <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a> */}
            <ul className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li className="dropdown-header text-start">
                <h6>Filter</h6>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Hari Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Bulan Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Tahun Ini
                </a>
                </li>
            </ul>
            </div>
            <div className="card-body">
            <h5 className="card-title">
                Operasi
                {/* <span>| Tahun Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByKategori2}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                </div>
            </div>
            </div>
        </div>
    </div>
    {/* KATEGORI 3 PELANGGAN (WALK-IN) */}
    <div className="col-xxl-6 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            {/* <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a> */}
            <ul className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li className="dropdown-header text-start">
                <h6>Filter</h6>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Hari Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Bulan Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Tahun Ini
                </a>
                </li>
            </ul>
            </div>
            <div className="card-body">
            <h5 className="card-title">
                Pelanggan (Walk-In)
                {/* <span>| Tahun Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByKategori3}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                </div>
            </div>
            </div>
        </div>
    </div>
    {/* KATEGORI 4 SEMAKAN DI LAPANGAN (TUKAR TERUS) */}
    <div className="col-xxl-6 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            {/* <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a> */}
            <ul className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li className="dropdown-header text-start">
                <h6>Filter</h6>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Hari Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Bulan Ini
                </a>
                </li>
                <li>
                <a className="dropdown-item" href="#">
                    Tahun Ini
                </a>
                </li>
            </ul>
            </div>
            <div className="card-body">
            <h5 className="card-title">
                Semakan Di Lapangan (Tukar Terus)
                {/* <span>| Tahun Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByKategori4}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                </div>
            </div>
            </div>
        </div>
    </div>

    </>
  )
}

export default TotalApplication