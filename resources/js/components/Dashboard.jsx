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
        <h2>Tong</h2>
        <section className="section dashboard">
            <div className="row">
                <TotalBin/>
            </div>
        </section>

        {/* PERMOHONAN */}
        <h2>Permohonan</h2>
        <section className="section dashboard">
            <div className="row">
                <TotalApplication/>
            </div>
        </section>

        {/* DELIVERY */}
        <h2>Penghantaran</h2>
        <section className="section dashboard">
            <div className="row">
                {/* <Delivering/> */}
                <InTransit/>
                <Returned/>
                {/* <Pending/> */}
                <Completed/>
            </div>
        </section>

        {/* COST */}
        <h2>Cost</h2>
        <section className="section dashboard">
            <div className="row">
                <TotalCost/>
                <DeliveryCost/>
                <SavingCost/>
            </div>
        </section>
    </div>
    )
};

export default Dashboard;
