import React from "react";
import TotalBin from "./Bin/TotalBin";
// import Delivering from "./Delivery/Delivering";
// import Pending from "./Delivery/Pending";
import Completed from "./Delivery/Completed";
import InTransit from "./Delivery/InTransit";
import Returned from "./Delivery/Returned";
import TotalCost from "./Cost/TotalCost";
import DeliveryCost from "./Cost/DeliveryCost";
import SavingCost from "./Cost/SavingCost";
import TotalApplication from "./Application/TotalApplication";

const Dashboard = () => {
    return(
    <div>
        {/* BIN */}
        <div className="card">
            <div className="m-4">
                <h2>Tong</h2>
            </div>
            <section className="section dashboard">
                <div className="row m-2">
                    <TotalBin/>
                </div>
            </section>
        </div>

        {/* PERMOHONAN */}
        <div className="card">
        <h2 className="m-4">Permohonan</h2>
        <section className="section dashboard">
            <div className="row m-2">
                <TotalApplication/>
            </div>
        </section>
        </div>

        {/* DELIVERY */}
        {/* <h2>Penghantaran</h2>
        <section className="section dashboard">
            <div className="row">
                <Delivering/>
                <InTransit/>
                <Returned/>
                <Pending/>
                <Completed/>
            </div>
        </section> */}

        {/* COST */}
        {/* <h2>Cost</h2>
        <section className="section dashboard">
            <div className="row">
                <TotalCost/>
                <DeliveryCost/>
                <SavingCost/>
            </div>
        </section> */}
    </div>
    )
};

export default Dashboard;
