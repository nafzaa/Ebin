import React from "react";
import Total from "./Tong/Total";
import Instock from "./Tong/Instock";
import Outstock from "./Tong/Outstock";

const Dashboard = () => {
    return(
    <div>
        <h2>Tong</h2>
        <section class="section dashboard">
            <div class="row">
                <Total/>
                <Instock/>
                <Outstock/>
            </div>
        </section>
    </div>
    )
};

export default Dashboard;
