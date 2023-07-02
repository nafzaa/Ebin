import axios from 'axios'
import React, { useEffect, useState } from 'react'
import sum from '../../../../public/assets/img/sum.png'

const TotalBin = () => {
    const [totalbin, setTotalbin] = useState(0)
    const [totalBinUpdatedAt, setTotalBinUpdatedAt] = useState(0)
    const [instock, setInstock] = useState(0)
    const [outstock, setOutstock] = useState(0)
    const [instockUpdatedAt, setinstockUpdatedAt] = useState(0)
    const [outstockUpdatedAt, setoutstockUpdatedAt] = useState(0)

    const GetTotalBin = async(url) => {
            await axios.get(url).then((response)=>{
                setTotalbin(response.data)
            }).catch((e)=>{
                console.log(e)
            })
    }
    const GetTotalBinUpdatedAt = async(url) => {
        await axios.get(url).then((response)=>{
            setTotalBinUpdatedAt(response.data)
        })
    }
    const GetInStock = async(url) => {
        await axios.get(url).then((response)=>{
            setInstock(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetOutStock = async(url) => {
        await axios.get(url).then((response)=>{
            setOutstock(response.data)
        }).catch()
    }
    const GetInStockUpdatedAt = async(url) => {
        await axios.get(url).then((response)=>{
            setinstockUpdatedAt(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }
    const GetOutStockUpdatedAt = async(url) => {
        await axios.get(url).then((response)=>{
            setoutstockUpdatedAt(response.data)
        }).catch((e)=>{
            console.log(e)
        })
    }

    useEffect(()=>{
        GetTotalBin('/home/bin/count')
        GetTotalBinUpdatedAt('/home/bin/updated_at')
        GetInStock('/home/bin/instock/count')
        GetOutStock('/home/bin/outstock/count')
        GetInStockUpdatedAt('/home/bin/instock/updated_at')
        GetOutStockUpdatedAt('/home/bin/outstock/updated_at')
    }, [])

  return (
    <>
    {/* Total Bin */}
    <div className="col-xxl-4 col-md-12">
        <div className="card info-card sales-card">
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
                Total 
                {/* <span>| Hari Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi" />
                <img src={sum} style={{width:"60%"}} />
                </div>
                <div className="ps-3">
                <h6>{totalbin}</h6>
                <span className="text-muted small pt-2 ps-1">Dikemaskini: </span>
                <span className="text-success small pt-1 fw-bold">{totalBinUpdatedAt}</span>{""}
                </div>
            </div>
            </div>
        </div>
    </div>

    {/* In Stock Baki */}
    <div className="col-xxl-4 col-md-12">
        <div className="card info-card sales-card">
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
                Baki 
                {/* <span>| Hari Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-cart" />
                </div>
                <div className="ps-3">
                <h6>{instock}</h6>
                <span className="text-muted small pt-2 ps-1">Dikemaskini: </span>
                <span className="text-success small pt-1 fw-bold">{instockUpdatedAt}</span>{""}
                </div>
            </div>
            </div>
        </div>
    </div>

    {/* Out Stock */}
    <div className="col-xxl-4 col-md-12">
        <div className="card info-card revenue-card">
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
                Keluar 
                {/* <span>| Bulan Ini</span> */}
            </h5>
            <div className="d-flex align-items-center">
                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i className="bi bi-cart" />
                </div>
                <div className="ps-3">
                <h6>{outstock}</h6>
                <span className="text-muted small pt-2 ps-1">Dikemaskini: </span>
                <span className="text-success small pt-1 fw-bold">{outstockUpdatedAt}</span>{""}
                </div>
            </div>
            </div>
        </div>
    </div>
    </>
  )
}

export default TotalBin