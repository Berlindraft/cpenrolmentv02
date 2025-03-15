"use client";
import React from "react";

function Login() {
  return (
    <main className="flex overflow-hidden flex-col pb-64 bg-[linear-gradient(180deg,#3A62D9_0%,#BECBE4_54.1%,#B7C5D8_82.1%,#FFF_100%)] max-md:pb-24">
      <header className="flex flex-col items-end px-20 w-full bg-black max-md:pl-5 max-md:max-w-full">
        <img
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/852b023f3bcebe6578379ee8a7dc3c160a142e818cc8bad1f3d5eecd496427d0?placeholderIfAbsent=true&apiKey=84efd04d69514075b5404d5ab40e5a07"
          alt="Logo"
          className="object-contain aspect-[4.31] w-[95px]"
        />
      </header>
      <img
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/ef671038e6d97d5d3ba0e4223a48397f0f89c7988ec5d8ca6264529d8ff83d2d?placeholderIfAbsent=true&apiKey=84efd04d69514075b5404d5ab40e5a07"
        alt="Background"
        className="object-contain w-full aspect-[34.48] max-md:max-w-full"
      />
      <section className="self-center pl-12 mt-48 max-w-full bg-white rounded-xl border border-black border-solid w-[750px] max-md:pl-5 max-md:mt-10">
        <div className="flex gap-5 max-md:flex-col">
          <div className="w-6/12 max-md:w-full">
            <form className="self-stretch my-auto w-full max-md:mt-10">
              <div className="flex gap-5 justify-between text-black">
                <div className="flex flex-col">
                  <h2 className="text-2xl leading-relaxed">Login to your account</h2>
                  <p className="self-center mt-4 text-xs">
                    Don't have an account? <span className="text-[rgba(107,99,255,1)]">sign up</span>
                  </p>
                </div>
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/64dd3b9678b56d1232aa933152a89259604434246d7ee7b0bda8778865b53d36?placeholderIfAbsent=true&apiKey=84efd04d69514075b5404d5ab40e5a07"
                  alt="Login icon"
                  className="object-contain shrink-0 self-start aspect-[0.97] w-[31px]"
                />
              </div>
              <input type="email" placeholder="Email Address" className="px-3.5 pt-2 pb-4 mt-14 text-xs text-black bg-white rounded-md border border-solid border-black border-opacity-10 shadow w-[300px] max-md:pr-5 max-md:mt-10" />
              <input type="password" placeholder="Password" className="p-3.5 mt-9 text-xs text-black bg-white rounded-md border border-solid border-black border-opacity-10 shadow w-[300px] max-md:pr-5" />
              <input type="password" placeholder="Confirm Password" className="px-4 py-3.5 mt-9 text-xs text-black bg-white rounded-md border border-solid border-black border-opacity-10 shadow w-[300px] max-md:pr-5" />
              <div className="flex gap-4 mt-3">
                <label className="flex gap-1 text-xs cursor-pointer">
                  <input type="checkbox" className="hidden" />
                  <div className="w-2.5 h-2.5 border border-solid bg-zinc-300 border-black border-opacity-50 !text-black" />
                  <span className="text-black">Remember me</span>
                  </label>
                <button type="submit" className="px-8 py-3 mt-9 text-sm font-bold bg-white rounded-md border border-solid border-black border-opacity-10 shadow max-md:px-5">Login</button>
                <a href="#" className="text-xs text-blue-800">Forgot Password?</a>
              </div>
            </form>
          </div>
          <div className="ml-5 w-6/12 max-md:w-full">
            <div className="flex mx-auto bg-black rounded-xl border border-black border-solid h-[500px] w-[350px] max-md:mt-10" />
          </div>
        </div>
      </section>
    </main>
  );
}

export default Login;
