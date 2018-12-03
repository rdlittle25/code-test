const { outputArray } = require("./example.js");

describe("Function should intake object and output array", () => {
  const testObject = {
    testOne: 1,
    testTwo: { two: 2 },
    testThree: [3],
    testFour: "Four",
  };

  it('should return array', () => {
    const test = outputArray(testObject);
    expect(Array.isArray(test)).toBe(true);
  });

  it('should throw on incorrect input', () => {
    let input;
    const test = () => outputArray(input);

    input = "String";
    expect(test).toThrow();

    input = 1;
    expect(test).toThrow();

    input = [];
    expect(test).toThrow();
  })
});
