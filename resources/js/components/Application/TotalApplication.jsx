import axios from 'axios'
import React, { useEffect, useState } from 'react'

const TotalApplication = () => {
    const [totalApplication, setTotalapplication] = useState(0)  
    const [totalApplicationByScheme1, setTotalApplicationByScheme1] = useState(0)
    const [totalApplicationByScheme2, setTotalApplicationByScheme2] = useState(0)

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
    const GrtTotalApplicationByScheme2 = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalApplicationByScheme2(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }

    useEffect(()=>{
        GetTotalApplication('/home/application/count')
        GetTotalApplicationByScheme1('/home/application/scheme1/count')
        GrtTotalApplicationByScheme2('/home/application/scheme2/count')
    })

  return (
    <>
    {/* TOTAL APPLICATION */}
    <div className="col-xxl-4 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a>
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
                Total <span>| Tahun Ini</span>
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplication}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                </div>
            </div>
            </div>
        </div>
    </div>

    {/* SCHEME 1 */}
    <div className="col-xxl-4 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a>
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
                PHKT 01 <span>| Tahun Ini</span>
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-file-text" />
                </div>
                <div className="ps-3">
                <h6>
                    {totalApplicationByScheme1}
                </h6>
                {/* <span className="text-danger small pt-1 fw-bold">12%</span>{" "}
                <span className="text-muted small pt-2 ps-1">decrease</span> */}
                </div>
            </div>
            </div>
        </div>
    </div>

    {/* SCHEME 2 */}
    <div className="col-xxl-4 col-xl-12">
        <div className="card info-card customers-card">
            <div className="filter">
            <a className="icon" href="#" data-bs-toggle="dropdown">
                <i className="bi bi-three-dots" />
            </a>
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
                PHKT 02 <span>| Tahun Ini</span>
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
                </div>
            </div>
            </div>
        </div>
    </div>
    </>
  )
}

export default TotalApplication