@extends('user_dashboard.layouts.user-master')
@section('content')
    <style>
        .profile-user-inner {
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0px 8px #ababab4f;
        }

        .card-profile-img {
            width: 140px;
            height: 140px;
            overflow: hidden;
        }

        img {
            width: 100%;
            height: 100%;
        }

        .user-information {
            display: flex;
            border-bottom: 1px solid #000;
            width: 80%;
            padding-bottom: 6px;
            margin-top: 3rem;
            align-items: baseline;

        }

        .user-information span {
            font-family: ProximaNova-Regular;
            color: #2c2c2c;
            font-size: 18px;
        }

        .user-information select {
            border: none;
            width: 70%;
            font-family: ProximaNova-Regular;
            outline: none;
            color: #2c2c2c;
            font-size: 18px;
        }

        .user-information label {
            width: auto;
            margin-right: 1rem;
            font-family: PlayfairDisplay-Bold;
        }

        .tabs-inner-button button {
            outline: none;
            border: none;
            background: #000;
            color: #fff;
            font-family: ProximaNova-Regular;
            padding: 10px 2rem;
            width: 100%;
            margin-top: 1rem;
        }

        .tabs-inner-button button:hover {
            border: 2px solid #000;
            background: #fff;
            color: #000;
        }

        .for-btns-width {
            width: 16%;
        }

        .cstm-modal .modal-dialog {
            max-width: 500px !important;
            height: auto !important;
        }

        .cstm-modal .modal-dialog .modal-content {
            background-color: #fff !important;
            border: none !important;
        }

        .msg-textarea textarea {
            width: 100%;
            min-height: 300px;
            max-height: 300px;
            outline: none;
            border: 2px solid #000;
            border-radius: 5px;
            padding: 1rem 10px;
            font-family: ProximaNova-Regular;
        }

        .titlefont-style {
            font-family: PlayfairDisplay-Bold;
            font-size: 30px;
            text-align: center;
        }

        .cstm-modal .modal-header {
            padding-bottom: 0px;
        }

        .user-information select option {
            width: 100%;
        }

        @media only screen and (max-width: 1024px) {

            .for-btns-width {
                width: 28%;
            }

            .user-information {
                width: 100%;
            }
        }

        @media only screen and (max-width: 414px) {
            .profile-user-inner {
                padding: 2rem 6px;
            }

            .for-btns-width {
                width: 60%;
            }

    </style>



    <div class="for-content-tabs">
        <div class="tab-content" id="v-pills-tabContent">

            @if (Session::has('message'))
                <p class="alert
        {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}
                </p>
            @endif

            <h1>Coach Profile</h1>






            <!-- card started -->

            <div class="profile-user-inner">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex justify-content-center">
                        <div class="card-profile-img">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFRIYGBgZGRwaGBkaFRgYHBgcHhgaHBoaGhocIS4lHB4rHxwYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjYnJCg/NDU0NDY0MTQ0NDYxNTQ0Pz80NDY1NDQ1NDQ0ND81NDU0MTQ0NDQ9MTQxNDQxNDE0Nv/AABEIAOMA3gMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xABIEAABAgQCBwUFBgQDBgcBAAABAAIREiExAwQiMkFRYXGRBQZCgaETwdHS8AcUUoKSsRYzcqIjYmNDU3ODsuEXJJOjs8LTFf/EABkBAQADAQEAAAAAAAAAAAAAAAABAgUEA//EACMRAQEAAgEDBAMBAAAAAAAAAAABAhEDEjFRBCEyQSJhkRP/2gAMAwEAAhEDEQA/APXnumoEa+Whuj2y1F0Y2apugMbLU8lBbMYiyljpqHmoc4tMBZBLnTUHNGulEDdHNlqOSNbETG6AxstTyUFkxiLKWOmoeahzi0wFkEudNQc0a6Agb/FHNlqOSgkSlziBAEkkwAA2ncEBjZankhbEzC3wXJ5/vqwksy2Ecw4XeDJhNP8AxDrflFd60mP2rm8TXzgw2/gy7AP/AHHxdFeWXNjivjhlXpDzMKeqtHOMYIOxGg8XtH7leVYmRwn/AMz2uLxxMd7o86qW9n5cWyzPME/uvO+onhf/ABr1LBzTAf5jDso9p96vFsTMLfBeTu7Py5vlmeQI/ZTg5VjP5T8bA/4WO8DoTCHBJ6ieD/GvWHmagQGAl2/FeeZPt7OYOriMzTfwPAw8SG5r20J4kLp+xe8uBmDJF2HjgROFiCV1NrdjhTYecF7Y8mOXZ55YXFvGCW+1C2Jm2X6IwzX2IXQMuy3VXVHOmoOaMfKIG6PbLUIxswiboDGy1PJQWzGIspY6ah5qC6UyiyCXOmoOaNdASm/xRzZajkjWxExv8EBjZalHCNRyRpmoUc6WgQGslqfRQ5k1R6o0l1DbojnFpgLIJcZqDnVGulEDdHthVt+qNaCIm6CGtlqeVELZjMLfBGmajrX3KXOIMBZAcZqDnVGulEDdHNlq34qWtjU3QYmezjMvhuxsZ4axoqf2AG0k0A4rzftftXEzjpsWLMCMWYAMC4CzsUi52y2HqXePtk5vHoY4GC4jDGx7xR2Id4FQ3hE7SsKdcfNy23pxdHHhr3rInoAIACwAgB5KmZWJlRi47WiZzgBvK5nqypkmWFhZuJALXtiJmTNLZ2/ibG4V+dSL0yTKxMkyhK/MozDGvAD4xBi1wMHsIsWuFQYqzMkylDq+7XeZ07ctmnAuJhg4xoMTcx+5+4+LnftQYCXbbhVeOY7A9pa6x6g7CNxXe9ye2jj4bsPFMcfBgHH/AHjfA/nSB4jiuzh5er8b3eHJhr3jpWtlqeVELJjEWRhLqOt0Rzi0wFl0PFLjNQc6o10ogbo9sKtvbejWgiJughrZanlRC2JmFvgjTNR3wRxIMosglxmoOdUaYUPOiPEtR8UY2arr9EAumoPVA6Wh9Ec0NqL9Ua0Grr9EENbLU8qIWTGYW4owl1HW6I5xBgLdUEuM1BzqjXSiBv8AFHgNqL9Ua0ERN0ENbLU8qLne/PaRwss6QwfikYTN4LgZncINDjHfBdE0zUd8F5x9o2amzWFhDVw8Mv4TPdL1AZ/cqcl6cbV8JvJz2E0NaGiwEAq51YnU5fDfivbhYQi91STZjdr3cFnOpcYXveMPCZO87BZo/E8+ELrOxu6zGEPxyMXF2RGgz+hp/c15LYdi9ksy7JGCJNXvOs928n9hsWzCjfheY67tb292O3M4cpMr26WG/ax3vabEe8BcCHPa52HiNlxGGD2/s4b2m4PFepgLR96OwPvDQ/Dg3HYNA2DxtY7gdh2HmVaRFn24udJ1i+0IcWPaWPbRzHCDgfeOKrnUaVX50nVidJ0F+dXMj2h93x8LMbGuDcTjhuIDucKOHELEnVGJpAtO0EK2Nsu0WbmnuBcHCA58Ea6Wh9Foe5mdOJksF3ja32btpiwlkTzDQfNb5jQRE36LRl3NuSzVQ1stTyohZMYiyNJdR1uilziDAWUoHGag51RrpRA3+KPEtR8Ua0ERN0ENbLU8qKSI1HKqhhm1vgjiW0bbqgNZLU+iOZNUeqNJNHW6I5xBg23VBJdNQc6o10tCjgBVt+qNaCIuv0QQ1stTyohbNpD6gjYmjrdKqXOIMBZALpqDnVeP97MUnPZiPhLGDkMNsfUlewOAGrfqvFO8rj99zUb+0P8A0tXhz/F68XyYeJiwEYR3DedgC7/uz2R93w4urivg7EO47GDg23OK5Punkva5gOcIswQHni80YPKrvyr0ULgyy+nZx4/atquBW2qtqjFerjVcarYVYK9Y86we1ex8HMCGLhhxGq4aLm/0uFRysuSz3cfFbXAx2vGxuKIO/WwQPQLvVBKmq6eWYvYOcaYHKuPFr2OB9YqvL93M28w9kMIbXve0w5NaSSV6YVQ5VtTMXm3bXYOLlmzl4xcOznBsrmRsXNiYt4rWTr1bGw2uaWuALXAhwNiCIEFeUZ7KnAxX4JrI7RJ2sNWHoQol2WaegfZfjf4GMDZuO6HAOYw/uCu0cybSC4b7K2xw8xG3tR1DB8V3JcQYNt1Wjx/GOLP5VJdNQc6o10uifqKOAFW36o1oIib9FdVDWy1PKiFsxmFvgjTGjrdEc4gwFvqNUEl01BzqjTLQ86I4Q1fijWg1dfogOfNQI18tCjgBVt+qNANXX6IIa2Wp5IWzaQUtJOtbooJIMG26oJc6ag5oHS6P1VHADVv1ojQCIuv05UQQ1stTyXjPfbDLc9mKQDix7eIOG2vUHovZmknWt0XDfaV2A7EYMzhNLn4bS14AiXMqYjeWkkw3OO5eXNj1Yr4XWTD7j5aXLT7cR7neQMgH9pPmumatd2FhyZbBbuw2R5ygn1itgFlZXeVaeM1JF1qqBVAVQKtKiroKrBVoFVAr0lediuKEqmKglTtGkkq25VEqglUtWkUlcH3/AMtK/CxQNZpY7m3Sb+7ui7slc335wJsq521j2PHWU+jioxv5Jym8az/swwv/ACj97sd7o8msb7l2QfChXPdxco7CyOCCIOcHPO+D3lzaf0lq6FoBEXX6LUwmsYzcu9Q1stTyQtm0vqiNJOtbpVCSDBtuvqroS501BzQOl0fqqOAGrfrRGgERN+nKiCGtlqeVFJbNUclDTHWt0UuJFG26oAZLU1QsmqKI0k61uNFDiQdG3CqCS6agptQOl0UcANW/CtEaARF1+NEEBstTXYhbNpfVEYSda3GlUJIMG2686oJLpqCm1A6GifqKOAGrfhWiNAIi6/GiDmMsINA3U6GCuhQ5srntOx5Pk7SH7osXKatjXl3N+VwFVgq0CqwUlRYuAqQVQCpiryq2K4oSqYqIqdmkkqklCVSSq2pkCVi5rAa8BjmhzXua0g2ILhQq+Spy7ZsRg3Eu6AkesEwnVnIZe2NrfhstfKiFk2kjCTrW40QkgwbbhVbDKSXTUFNqB0uj9VRwA1b8K0RoBEXX6IIDZamuxC2bS+qIwk61uNKo4kGAt9RqgkumoKbUBloa7UcIat+FUaAda/GiAXzUsgfLS6OAGrfhVGgHWvxoggNlrfYhZNpWRhJ1rcaVRxMdG3CqCSZqW2oHS6P1VHQGrfhWiNAhpX434IIDZa32IWTaSMJOtbjSqOJjo24VQabtVv8AiBwFHtgf6m29D6LGW57Sy4cwhsJgYthWo+oea0uG6Ij9DeFmeqw6c9+Wj6fLeGvCpSCqVK53urBUxVuKmKbRpXFIqmKiKbNKoqklRFFG06Fl9j4UXOfsbBo4+J3uWDiOgKVJoBvJsFvMlgFjWtFQNY7CTVxjziur0uHVl1eHP6jPWOvLJmmpbagdLo3R0Bq34VRoENK/Gi0megNlrfYhbNpfVEYSda3GlUJMdG3C3FBJM1LbUDpdH6qjoDVvwrRGgQrrevCiCA2Wt9iFs1bbEbE61uNFLojVtwqgBktb7EkmrZGx8VuKOjHRtwQJpqW2oHS6N0dDw34bkbCGlfiggNlrfYks2l9URkfFbjvR0Y6NuFuKCSZqW2oHS6N0dDw34bkbCGlfjdBEstb7Fpu0cvK72gGi46X+U7+R/fmtyyPitx3qnFbGIhFpoRCII2rz5eOZ46r04uS4Zbc+irzmAMIgTRa6MpjUcD8VQFk543C9NaeOUym52ERFCwiIglFBKnI4QxXEeFsC7e6tuAU443LKYxXLKY423tGT2Vlp3Tmw1OOwu9wW5mho+UeaggACX03KRCFdb1jsWvx4TDHUZfJnc8t1AbLW+xJJtKylsfFbiodGOjbgrqJJmpbak0ujf/ujoeG/DcjYQ0r8boIDZa32JLNpenJGR8VuO9DGNNXhbigkmaltqB0tL7UdDw34I2HivxQTPNSyTy0uofDw34IyHivxQRLLW+zckk2lZGR8VuO9HRjo24IJmmpbbvSaGjfjzR0PDfhuRsIaV+N+CCJZa32bkkm0rIyPitx3rFz/AGjhYNcTGZht3ve1g/uKDLmmpbbvSaGjfjzXLZzv7kWmXDxH4rt2DhufHk6AaeqxMPvni4jmhnZ+I1hOliYz2sLRvGG2Jd1Ci3U2mTd0z+2cWOJAGIaIeZqfcPJYbMQttbcfqipjGpMSak7ybosnPLqytv21cZ0yY+GU3MjbEeo9FcGK38Q6rBUQXnpbcZ5xm/iHVWnZobAT6BY0ETRuKnvLrny2LO7ExIYsPxAjzofcVr1Dsy7C/wARjJ3MBLWzSzGB0ZqwjvXrx3WUv7U5Pyxs/VdnCWt4+SmWOl5w5LjcHv8A4YMMxk8zh8ZBiMH5mmPotjle+mQxDBubw2iMIPJwvKDwFrMp0M01Lbd6Ty6N1Rh4zXtmw3tdxa4OEOYVbYQ0r8UESy1vs3JLNpW4ckZHxW470dGOjbhbigmaaltu9JpdH15o6Hhvw3I2EK63G/BBEstb7NySzVts3oyPitxUuj4bcECWWt9m5JJq29UbHxW4o6MdG3BBE01Lbd61na3eLLZSmPjNaTUNq55juY0F0ONlzvfPvWWPOVyjgMWA9riwBGCCKNA2vIrDYIeXD4LWsJcIue4xdiPM73HaS41ig7fE+0Btfu+Sx8U7C+XBYfzEuP8Aatdmu9WfeYgZbLjjNiuHmSG+i512YcbuPVUToNhmczjYn8/tHMP/AMuGRgt6MABWHh5XLMMW5drnbXYhLyTvMVbnSdBsB2g4CDZWDc1oCsvzDnazieZJWLOk6Dpeye0Q4SOOkLf5h8VtVwofxW4yHbpbTEER+IX8xt5ri5vT3fVj/Hbxc8s6cu/l0jWq4GLGyvaGG/VeDw29L+izmvb+ILl6dd3R37Lfs1S5ivOxGDxBa7N9sYTPGCdwqeg96mY79ojeve+y+4QWj7Zz41Gn+ojZwWJn+3HPozRG/wAX/ZauddXD6ey9WX8c/NzzXTj/AFnMzzxbEPnX91GJmmvo/Dw3/wBTBHqsKdJ12ONcGTy00zcN+E78WE9zCOhCzsDO5hn8rtPGHDFDcYcovBotbOk6DpcLvZn20cMrjt4T4bz5xLfRbHKfaE1oAzOTxcIbXsIxmDiS0B0OQK4mdVszDhZ3lcIPYOzs/hYjBi4OI3EY6gc00jtB3EbjVZUsdK3DkvFcpmn5fE9vliGP/wBoz/Z4w/C9to3gbiK9W7A7ZZm8FuNhRAjK9hux4hM13ER8wQdqDZzTUtt3pNLS+3cpdDw34I2HivxQRNNS21arvR2z9zyz8SAc4CDAfE9xgwQ3RqeAK2z4eG/BeafahnS7Gy+XjqNdjPHEksw+gGJ1QcjgxAJc4ue4lz3G7nuMXOPmrkyx5kmQZEyTLHmSZBkTJMseZJkGRMkyx5kmQZEyTLHmSZBkTKtuaeLPcOTiFiTJMos2mWzsyn47jdxPMk/uqZljzJMpRtkTJMseZJkGRMkyx5kmQZEyTLHmSZBkTJMseZJkGRMtt3O7XOWzbQT/AIWYIw3jY15phv5xMp4O4LQzK3mGzNLa1FDuOw9UH0DLLW+zcks1bbFqu6/aX3jK4OO4xnYJtonbov8A7muW1dHw24IBZLW68T755ovz+ZcbNLWN4BrGxH6i7qva2gg6VuNV8/dr4s2ZzLo3zOMRy9o6HpBBRMkysTJMgvzJMrEyTIL8yTKxMkyC/MkysTJMgvzJMrEyTIL8yTKxMkyC/MkysTJMgvzJMrEyTIL8yTKxMkyC/MkysTJMgvzJMrEyTIL8yTKxMkyD1P7KMxNlsXBJ/l4xLeDXtDh/dOu4LpaX2ry77JsY+3zLAdfDY+/4HOaf+sL1JpA1r8aoID5qW2r517SMMfGH+ti//I5fQuI6OreOyi8j7X7gZt2PivYcIsfiPe0ueWmD3F0CJTURhfZFBx0yTLpnfZ7nRcYI/wCYflVP/h/nf9L/ANQ/Kg5uZJl0X8B5zZ7E/wDMd8ipPcXNi5wv1u+RBz8yTLfu7jZsX9kPzu+VR/BOa/0v1u+VBoZkmW9/gvM7DhH87vkVJ7m5nacL9bvkQaSZJluz3PzIucMfnd8qp/hDM78P9bvlQaaZJluR3SzOw4Z/O75VB7pZnfh/rd8qDTzJMtwe6WZ2+z/WflQd0cz/AKf6z8qDTzJMtyO6OZNjhn87vlU/wfmd+F+t3yoNLMky3n8GZnacIfnd7mKodys1vwv1u+RBoZkmW/b3IzRs7B/W/wCRVfwLmvx4A/O/5EHPTJMuk/gHN7XYA/O/3MVTfs+zhs/A/W/5EHMzJMuob9nmbNsTLn8+J78NVD7Oc3/vMuOE+J/+aC79lmNLnz/my72/34bv/qvYwJq22Lzfub3MzOVzLcfFfglgY9pDXvc4zCkAWAXG9ehkknRtwoguOwpaiqp9hNVVtBFXW6o4EmLbdEFn2c9CIbVQcKXRgspxB1b9EaQBB1+qDEflA2orsVH3IO0vqizWgjWt1qhaSYtt09EGvGUD6QhtVLsmG6MFs3EHVv0RpAEHX6oNU/s4NqK7FT//ADA7S+qLbNbDWt1qoLSTEW6eiDTjs4PpCG1Q7s0DRh9Fbp0Dq36KWwAgb/UKoNG7skNrdB2ODpfVFu2thrfFQWEmIt050QaRvZgdSENqk9mgGWH0Vu3QOrfopbACBv8AUKoNKeygyt1LeygdL6otw1sNb4qCCTEav1GiDUt7ODuEFX9yAMsOHVbR0Dq+exSCIQOt79lUGtPZ4ZXyVTMgHVWe0EVdbqhaSYtt0QYTMtNQiG1V+wl0YfRWW4g6t+lEaQBB1+vqgxvu0lRXYq25eOl9UV5oI1rdVBBJiLdOdEFAbNQ02qqEtBzVTjHVv0RrgKOv1QVY9vNMDVREFvL38kxtboiIK8xbz+KnB1eqIgoy9/JRja3REQV5i3n8VOFq9URBRl7+SjE1+iIgrzFhzU4Wr196Igt5e55Jia3REQV5iw5qWavkfeiIKcvcql+t5j3IiC5j280wdXqiILeXv5fBMbW6IiCvMW81OFq9URBby9zyTHv5KUQf/9k="
                                alt="">
                        </div>
                    </div>
                    <div class="tabs-inner-button">
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal">Message</button>
                    </div>
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary">
                            Launch demo modal
                        </button> -->

                    <!-- Modal -->
                </div>
                <div class="row mt2">
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>First Name:</label><span>John</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>Last Name:</label><span>Smith</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>Email:</label><span>JohnSmith@gmail.com</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>Contact:</label><span>021-111-987-(759)</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label for="cars">Services:</label>
                            <select name="cars" id="cars">
                                <option value="volvo">
                                    08/3/2022 -------- 9am-11am
                                </option>
                                <option value="volvo">
                                    27/4/2022 -------- 11am-1pm
                                </option>
                                <option value="volvo">
                                    14/6/2022 -------- 10am-12pm
                                </option>
                                <option value="volvo">
                                    04/7/2022 -------- 1pm-3pm
                                </option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="for-btns-width">
                    <div class="tabs-inner-button mt1">
                        <a href=""><button>Book</button></a>
                    </div>
                </div>

            </div>
            <div class="cstm-modal">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title titlefont-style" id="exampleModalLabel">Message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="msg-textarea">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
